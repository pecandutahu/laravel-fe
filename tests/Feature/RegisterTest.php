<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_register_page()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_register_attempt_email_already_taken()
    {
        $response = $this->post('/register', [
            'firstName' => "Faker",
            'lastName' => "Acc",
            'email' => "faker@a.com",
            'password' => "WrongPassword2!",
            'repeatPassword' => "WrongPassword2!",
        ]);
        $response->assertSessionHasErrors([
            'email' => 'The email has already been taken.'
        ]);
    }

    public function test_register_attempt_firstname_required()
    {
        $response = $this->post('/register', [
            'firstName' => "",
            'lastName' => "Acc",
            'email' => "faker@a.com",
            'password' => "WrongPassword2!",
            'repeatPassword' => "WrongPassword2!",
        ]);
        $response->assertSessionHasErrors([
            'firstName' => 'The first name field is required.'
        ]);
    }

    public function test_register_attempt_lastname_required()
    {
        $response = $this->post('/register', [
            'firstName' => "Faker",
            'lastName' => "",
            'email' => "faker@a.com",
            'password' => "WrongPassword2!",
            'repeatPassword' => "WrongPassword2!",
        ]);
        $response->assertSessionHasErrors([
            'lastName' => 'The last name field is required.'
        ]);
    }

}