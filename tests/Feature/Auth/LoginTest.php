<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    
    public function test_user_can_view_a_login_form()
    {
        $response = $this->get('/login');

        $response->assertSuccessful();
        $response->assertViewIs('login');
    }

    public function test_user_can_login_with_correct_credentials()
    {
        $response = $this->post('/login', [
            'email' => 'faker@a.com',
            'password' => 'WrongPassword2!',
        ]);
        $user = User::where('email', 'faker@a.com')->first();
        $response->assertRedirect('/user');
        $this->assertAuthenticatedAs($user);
    }

    public function test_user_cannot_login_with_wrong_credentials()
    {
        $response = $this->get('/login');

        $response = $this->post('/login', [
            'email' => 'faker@a.com',
            'password' => 'WrongPassword1!',
        ]);
        $response->assertRedirect('/login');

    }
}
