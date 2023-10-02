<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = session()->get('userId');
        $token = "Bearer " . session()->get('token');
        $response = http::withHeaders([
            'Authorization' => $token
        ])->get(env('API_URI') . 'users/' . $userId,[
            'id' => $userId
        ]);
        $user = json_decode($response);
        return view('dashboard.user.index', [
            'title' => "Users Page",
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if (Auth::check()) {
            return view('register', [
                'title' => "Add user"
            ]);
        } else {
            return view('register', [
                'title' => "Register"
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'firstName' => ['required', 'max:255'],
            'lastName' => ['required', 'max:255'],
            'email' => ['email:dns','required', 'max:255'],
            'password' => ['required', 'min:8', 'max:255'],
            'repeatPassword' => ['required', 'same:password', 'max:255'],
        ]);

        $response = Http::post(env("API_URI"). '/api/register', [
            "firstName"=> $request->firstName,
            "lastName"=> $request->lastName,
            "username"=> $request->email,
            "password"=> $request->password,
            "repeatPassword"=> $request->repeatPassword
        ]);
        // $response = json_decode($response);
        // dd($response['error']);

        if (!empty($response['error'])) {
            return back()->withErrors($response['error']);
        }
        if (!empty( $response['msg'])) {
            $request->session()->flash('success', "Registration successfuly, please login");
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $userId = $id;
        $token = "Bearer " . session()->get('token');
        $response = http::withHeaders([
            'Authorization' => $token
        ])->get(env('API_URI') . 'users/' . $userId);
        $user = json_decode($response);
        return view('dashboard.user.edit', [
            'title' => "Users Page",
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'firstName' => ['required', 'max:255'],
            'lastName' => ['required', 'max:255'],
            'email' => ['email:dns','required', 'max:255'],
        ]);

        $token = "Bearer " . session()->get('token');
        $response = Http::withHeaders([
                'Authorization' => $token
            ])->put(env("API_URI"). 'users/' . $id, [
                "firstName"=> $request->firstName,
                "lastName"=> $request->lastName,
                "email"=> $request->email,
                "password"=> $request->password,
                "repeatPassword"=> $request->repeatPassword
            ]);
        if (!empty($response['errors'])) {
            return back()->withErrors($response['errors']);
        } else {
            $request->session()->flash('success', "Data has been updated.");
            return redirect('/user');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $token = "Bearer " . session()->get('token');
        $response = Http::withHeaders([
            'Authorization' => $token
        ])->delete(env('API_URI') . 'users/' . $id);
        return redirect('/logout');
    }
}
