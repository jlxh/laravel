<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    /**
     * Visit without signed in.
     */
    public function testVisitDashboard()
    {
        $this->visit('/dashboard')
            ->see('登录')
            ->assertResponseOk();
    }

    /**
     * Test login.
     */
    public function testLogin()
    {
        $this->visit('dashboard/login')
            ->type('admin@szjlxh.com', 'email')
            ->type('123456', 'password')
            ->check('remember')
            ->press('登录')
            ->see('后台管理系统')
            ->seePageIs('/dashboard');
    }

    /**
     * Logout.
     */
    public function testLogout()
    {
        $user = App\Models\Admin::find(1);

        $this->actingAs($user)
            ->visit('/dashboard')
            ->click('logout')
            ->seePageIs('/dashboard/login');
    }
}
