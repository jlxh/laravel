<?php 

namespace App\Repositories;

use App\Models\Admin;

class AdminRepository
{
	/**
	 * Get all admins
	 *
	 * @param int $perPage
	 * @param array $columns
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

	/**
	 * Destroy administrator.
	 * 
	 * @param  int $id
	 * @return int
	 */
	public function destroy($id)
	{
		return Admin::destroy($id);
	}

	/**
	 * Update administrator information.
	 * 
	 * @param  int $id
	 * @param  array $inputs
	 * @return bool
	 */
	public function update($id, $inputs)
	{
		return Admin::findOrFail($id)->update($inputs);
	}
}
