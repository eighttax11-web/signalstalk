<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class NavigationDashboardTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function test_unauthenticated_users_cannot_access_the_control_panel()
    {
        $response = $this->get('/admin');

        $response->assertStatus(302);

        return redirect()->route('login');
    }

    public function test_users_can_access_the_control_panel()
    {
        $response = $this->get('/admin');

        $response = $this->post('/login', [
            'email' => '20183l301008@utcv.edu.mx',
            'password' => '11012005qw',
        ]);

        $this->assertAuthenticated();

        $response->assertRedirect('/admin');
    }

    public function test_unauthorized_users_cannot_access_control_panel()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();

        $response = $this->get('/admin');

        $response->assertStatus(403);
    }

    public function test_admin_tags_index_screen_can_be_rendered()
    {
        $response = $this->post('/login', [
            'email' => '20183l301008@utcv.edu.mx',
            'password' => '11012005qw',
        ]);

        $response = $this->get('/admin/tags');

        $response->assertStatus(200);
    }

    public function test_admin_categories_index_screen_can_be_rendered()
    {
        $response = $this->post('/login', [
            'email' => '20183l301008@utcv.edu.mx',
            'password' => '11012005qw',
        ]);

        $response = $this->get('/admin/categories');

        $response->assertStatus(200);
    }

    public function test_admin_posts_index_screen_can_be_rendered()
    {
        $response = $this->post('/login', [
            'email' => '20183l301008@utcv.edu.mx',
            'password' => '11012005qw',
        ]);

        $response = $this->get('/admin/posts');

        $response->assertStatus(200);
    }

    public function test_admin_users_index_screen_can_be_rendered()
    {
        $response = $this->post('/login', [
            'email' => '20183l301008@utcv.edu.mx',
            'password' => '11012005qw',
        ]);

        $response = $this->get('/admin/users');

        $response->assertStatus(200);
    }

    public function test_admin_roles_index_screen_can_be_rendered()
    {
        $response = $this->post('/login', [
            'email' => '20183l301008@utcv.edu.mx',
            'password' => '11012005qw',
        ]);

        $response = $this->get('/admin/roles');

        $response->assertStatus(200);
    }

    public function test_unauthorized_users_cannot_access_roles()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();

        $response = $this->get('/admin/roles');

        $response->assertStatus(403);
    }

    public function test_unauthorized_users_cannot_access_create_rol()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();

        $response = $this->get('/admin/roles/create');

        $response->assertStatus(403);
    }

    public function test_unauthorized_users_cannot_access_users_list()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();

        $response = $this->get('/admin/users');

        $response->assertStatus(403);
    }
}
