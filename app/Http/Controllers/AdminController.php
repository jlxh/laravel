<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (! session()->has('adminTemplate')) {
            session(['adminTemplate' => 'gentallela']);
        }

        return view('admin.index');
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
