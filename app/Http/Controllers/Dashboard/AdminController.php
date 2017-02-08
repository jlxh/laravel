<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Repositories\AdminRepository;

class AdminController extends Controller
{
	/**
	 * AdminRepository Instence.
	 * 
	 * @var AdminRepository
	 */
	protected $admin;

	/**
	 * AdminController constructor
	 * 
	 * @param AdminRepository $admin
	 */
	public function __construct(AdminRepository $admin)
	{
		$this->admin = $admin;
	}

	/**
	 * Administrators management index.
	 * 
	 * @return Illuminate\Http\Resposne
	 */
    public function index()
    {
    	$admins = $this->admin->all();
    	return view('dashboard.admins.index', compact('admins'));
    }

    /**
     * Show administrator information.
     * 
     * @param  int $id
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {
    	$admin = $this->admin->getByID($id);
    	return view('dashboard.admins.show', compact('admin'));
    }
}
