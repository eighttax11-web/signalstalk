<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NavigationBlogTest extends TestCase
{
//    use RefreshDatabase;

    public function test_blog_principal_screen_can_be_rendered()
    {
        $response = $this->get('/blog');

        $response->assertStatus(200);
    }

    public function test_post_not_found()
    {
        $response = $this->get('/posts/201');

        $response->assertStatus(404);
    }

    public function test_view_post_detail()
    {
        $response = $this->get('/posts/200');

        $response->assertStatus(200);
    }

    public function test_view_post_for_category()
    {
        $response = $this->get('/category/qui');

        $response->assertStatus(200);
    }

    public function test_category_not_found()
    {
        $response = $this->get('/category/category');

        $response->assertStatus(404);
    }

    public function test_view_post_for_tag()
    {
        $response = $this->get('/tag/dolores');

        $response->assertStatus(200);
    }
}
