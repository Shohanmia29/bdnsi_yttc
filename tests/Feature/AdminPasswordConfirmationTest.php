<?php

namespace Tests\Feature;

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminPasswordConfirmationTest extends TestCase
{
    use RefreshDatabase;

    public function test_confirm_password_screen_can_be_rendered()
    {
        $admin = Admin::factory()->create();

        $response = $this->actingAs($admin, 'admin')->get('admin/confirm-update-password');

        $response->assertStatus(200);
    }

    public function test_password_can_be_confirmed()
    {
        $admin = Admin::factory()->create();

        $response = $this->actingAs($admin, 'admin')->post('admin/confirm-update-password', [
            'update-password' => 'update-password',
        ]);

        $response->assertRedirect();
        $response->assertSessionHasNoErrors();
    }

    public function test_password_is_not_confirmed_with_invalid_password()
    {
        $admin = Admin::factory()->create();

        $response = $this->actingAs($admin, 'admin')->post('admin/confirm-update-password', [
            'update-password' => 'wrong-update-password',
        ]);

        $response->assertSessionHasErrors();
    }
}
