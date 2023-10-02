<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {

        $validate = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        $response = Http::post(env("API_URI"). '/api/login', [
            "username"=> $request->email,
            "password"=> $request->password,
        ]);
        $response = json_decode($response);
        
        if (!empty( $response->token)) {
            $name = explode('@', $response->email);
            $name = $name[0];
            $user = User::where('email', $request->email)->first();
 
            if ($user !== null) {
                $user->update(['name' => $name]);
            } else {
                $user = User::create([
                'email' => $request->email,
                'name' => $name,
                'password' => bcrypt($randomString = Str::random(8)),
                ]);
            }
 
            Auth::login($user);

            $request->session()->regenerate();
            $request->session()->put('token', $response->token);
            $request->session()->put('userId', $response->id);
 
            return redirect()->intended('/dashboard');
        }else{
            return back()->with('loginError', 'Email and password doesn\'t match');
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
