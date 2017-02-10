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
    	return $this->view('dashboard.admins.index', compact('admins'));
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
    	return $this->view('dashboard.admins.show', compact('admin'));
    }


    public function store(Request $request)
    {
        
    }

    /**
     * Update resource.
     * 
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->vlaidateAdmin($request);

        $this->admin->update($id, $request->all());

        return redirect()->back()->with(['ok' => '修改管理员信息成功。']);
    }

    /**
     * Validate administrator form input.
     *
     * @param Request $request
     */
    public function vlaidateAdmin($request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'size:11',
            'roles' => 'array'
        ]);
    }

    /**
     * Destroy
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        return $this->admin->destroy($id) ?
            redirect('/dashboard/admins') : redirect()->back();
    }
}
