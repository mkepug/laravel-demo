<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{
    use RefreshDatabase;
    
    public function testNewUserCanRegister()
    {
        $this->post('/register', [
            'name' => 'Joel Clermont',
            'email' => 'jclermont@gmail.com',
            'password' => 'testing',
            'password_confirmation' => 'testing',
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'Joel Clermont',
            'email' => 'jclermont@gmail.com',
        ]);
    }
}
