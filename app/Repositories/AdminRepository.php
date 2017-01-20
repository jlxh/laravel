<?php 

namespace App\Repositories;

use App\Models\Admin;

class AdminRepository
{
	/**
	 * Get all admins
	 *
	 * @param int $perPage
	 * @param  array $columns
	 * @return Illuminate\Support\Collection
	 */
	public function all($perPage = 15, $columns = ['*'])
	{
		return Admin::orderBy('created_at', 'desc')->paginate($perPage, $columns);
	}

	/**
	 * Get administrator by given id
	 * @param  int $id
	 * @return App\Models\Admin
	 */
	public function getByID($id)
	{
		return Admin::where('id', $id)->with('roles')->first();
	}
}
