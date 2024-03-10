<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StudentRegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('student/register');

        $response->assertStatus(200);
    }

    public function test_new_students_can_register()
    {
        $response = $this->post('student/register', [
            'name' => 'Test Student',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated('student');
        $response->assertRedirect(route('student.dashboard'));
    }
}
