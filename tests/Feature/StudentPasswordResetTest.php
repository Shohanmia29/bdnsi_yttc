<?php

namespace Tests\Feature;

use App\Models\Student;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class StudentPasswordResetTest extends TestCase
{
    use RefreshDatabase;

    public function test_reset_password_link_screen_can_be_rendered()
    {
        $response = $this->get('student/forgot-password');

        $response->assertStatus(200);
    }

    public function test_reset_password_link_can_be_requested()
    {
        Notification::fake();

        $student = Student::factory()->create();

        $response = $this->post('student/forgot-password', [
            'email' => $student->email,
        ]);

        Notification::assertSentTo($student, ResetPassword::class);
    }

    public function test_reset_password_screen_can_be_rendered()
    {
        Notification::fake();

        $student = Student::factory()->create();

        $response = $this->post('student/forgot-password', [
            'email' => $student->email,
        ]);

        Notification::assertSentTo($student, ResetPassword::class, function ($notification) {
            $response = $this->get('student/reset-password/'.$notification->token);

            $response->assertStatus(200);

            return true;
        });
    }

    public function test_password_can_be_reset_with_valid_token()
    {
        Notification::fake();

        $student = Student::factory()->create();

        $response = $this->post('student/forgot-password', [
            'email' => $student->email,
        ]);

        Notification::assertSentTo($student, ResetPassword::class, function ($notification) use ($student) {
            $response = $this->post('student/reset-password', [
                'token' => $notification->token,
                'email' => $student->email,
                'password' => 'password',
                'password_confirmation' => 'password',
            ]);

            $response->assertSessionHasNoErrors();

            return true;
        });
    }
}
