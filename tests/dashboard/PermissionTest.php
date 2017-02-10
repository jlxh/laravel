<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PermissionTest extends TestCase
{

    /**
     * Super administrator.
     *
     * @var App\Models\Admin
     */
    public $superAdmin;

    /**
     * Normal administrator.
     */
    public $normalAdmin;

    /**
     * Set up for testing.
     */
    public function setUp()
    {
        parent::setUp();
        $this->superAdmin = App\Models\Admin::find(1);
        $this->normalAdmin = App\Models\Admin::find(2);
    }

    /**
     * Super administrator has the permission to manage permissions.
     */
    public function testPermissions()
    {
        $this->actingAs($this->superAdmin)
            ->visit('/dashboard')
            ->click('权限列表')
            ->seePageIs('/dashboard/permissions')
            ->hasInElement('.page-header', '权限管理');
    }

    /**
     * Administrators list.
     */
    public function testAdministrators()
    {
        $this->actingAs($this->superAdmin)
            ->visit('/dashboard')
            ->click('管理员管理')
            ->seePageIs('/dashboard/admins')
            ->seeInElement('.page-header', '管理员管理')
            ->seeLink('添加管理员')
            // Must list himself.
            ->see($this->superAdmin->name)
            ->seeLink('详情', url('/dashboard/admins/'.$this->superAdmin->id));
    }

    /**
     * Administrator profile.
     */
    public function testAdminProfile()
    {
        $this->actingAs($this->superAdmin)
            ->visit('/dashboard/admins/1')
            ->seeInElement('.page-header', '管理员信息')
            ->see('保存')
            ->dontSeeInElement('#profile-form', '删除');
    }

    /**
     * Update Administrator profile.
     */
    public function testUpdateInfo()
    {
        $this->actingAs($this->superAdmin)
            ->visit('/dashboard/admins/1')
            ->type('18888888888', 'phone')
            ->press('保存')
            ->seePageIs('/dashboard/admins/1')
            ->see('修改管理员信息成功');

        $this->actingAs($this->superAdmin)
            ->visit('/dashboard/admins/1')
            ->type('', 'name')
            ->press('保存')
            ->seePageIs('/dashboard/admins/1')
            ->see('姓名 不能为空');
    }
}
