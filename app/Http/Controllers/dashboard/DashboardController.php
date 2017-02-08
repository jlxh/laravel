<?php

namespace App\Http\Controllers\Dashboard;

use Gate;

class DashboardController extends Controller
{
    /**
     * Dashboard index.
     * 
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (! session()->has('adminTemplate')) {
            session(['adminTemplate' => 'gentallela']);
        }

        return $this->view('dashboard.index');
    }

    /**
     * Select template.
     * 
     * @param $version
     * @return \Illuminate\Http\RedirectResponse
     */
    public function selectTemplate($version)
    {
        session(['adminTemplate' => $version]);

        return back();
    }
}
