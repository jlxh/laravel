<?php

class IndexTest extends TestCase
{

    /**
     * Administrator.
     *
     * @var App\Models\Admin
     */
    public $user;

    /**
     * Set up for testing.
     */
    public function setUp()
    {
        parent::setUp();
        $this->user = App\Models\Admin::find(1);
    }
    
    /**
     * Index
     */
    public function testIndex()
    {
        $this->actingAs($this->user)
            ->visit('/dashboard')
            ->see('首页');
    }

    /**
     * Permission Works.
     */
    public function testPermissions()
    {
        $this->actingAs($this->user)
            ->visit('/dashboard')
            ->see('权限管理')
            ->assertSessionHas('permissions');
    }

    /**
     * Dashboard link.
     */
    public function testClickDashboard()
    {
        $this->actingAs($this->user)
            ->visit('/dashboard')
            ->click('首页')
            ->seePageIs('/dashboard');
    }
}
