<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function index($id = 0)
    {
        if (! session()->has('adminTemplate')) {
            session(['adminTemplate' => 'gentallela']);
        }

        return view('dashboard.index', ['id' => $id]);
    }

    /**
     * @param $version
     * @return \Illuminate\Http\RedirectResponse
     */
    public function selectTemplate($version)
    {
        session(['adminTemplate' => $version]);

        return back();
    }
}
