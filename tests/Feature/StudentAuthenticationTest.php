<?php

namespace Tests\Feature;

use App\Models\Student;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StudentAuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('student/login');

        $response->assertStatus(200);
    }

    public function test_students_can_authenticate_using_the_login_screen()
    {
        $student = Student::factory()->create();

        $response = $this->post('student/login', [
            'email' => $student->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated('student');
        $response->assertRedirect(route('student.dashboard'));
    }

    public function test_students_can_not_authenticate_with_invalid_password()
    {
        $student = Student::factory()->create();

        $this->post('student/login', [
            'email' => $student->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest('student');
    }
}
