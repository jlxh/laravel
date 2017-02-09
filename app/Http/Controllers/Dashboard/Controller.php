<?php

namespace App\Http\Controllers\Dashboard;

use Gate;
use App\Http\Controllers\Controller as Base;

class Controller extends Base
{
    /**
     * Navigation links.
     *
     * @var \Illuminate\Support\Collection
     */
    protected $navlinks;

    public function view($view = null, $data = [], $mergeData = [])
    {
        $this->filterLinks();

        return view($view, array_add($data, 'navlinks', $this->navlinks));
    }

    public function filterLinks()
    {
        $this->navlinks = collect();
        $this->navlinks->push(
            // 首页
            ['name' => '首页', 'links' => url('dashboard'), 'icon' => 'fa-home']
        );

        $this->addSample();
        $this->addPermissionLink();
    }

    public function addSample()
    {
        $this->navlinks->push([
            'name' => '导航菜单',
            'links' => [
                ['name' => '子菜单1', 'links' => url('dashboard?1')],
                ['name' => '子菜单2', 'links' => url('dashboard?2')]
            ],
            'icon' => 'fa-key'
        ]);
    }

    public function addPermissionLink()
    {
        if (Gate::denies('manage', 'App\Models\Permission')) {
            return;
        }

        $sublinks = [];

        Gate::allows('show', 'App\Models\Admin') &&
            array_push($sublinks, ['name' => '管理员管理', 'links' => url('dashboard/admins')]);
        Gate::allows('show', 'App\Models\Role') &&
            array_push($sublinks, ['name' => '角色管理', 'links' => url('dashboard/roles')]);
        Gate::allows('show', 'App\Models\Permission') &&
            array_push($sublinks, ['name' => '权限列表', 'links' => url('dashboard/permissions')]);
        
        $this->navlinks->push(['name' => '权限管理', 'icon' => 'fa-lock', 'links' => $sublinks]);
    }
}
