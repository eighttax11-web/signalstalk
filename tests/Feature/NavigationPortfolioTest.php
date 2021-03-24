<?php

namespace Tests\Feature;

use Tests\TestCase;

class NavigationPortfolioTest extends TestCase
{
    public function test_portfolio_principal_screen_can_be_rendered()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
