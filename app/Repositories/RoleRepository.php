<?php
namespace App\Repositories;

use App\Models\Role;

class RoleRepository
{
	/**
	 * Get all roles.
	 * 
	 * @param  integer $perPage
	 * @return Illuminate\Support\Collection
	 */
	public function all($perPage = 15)
	{
		return Role::orderBy('created_at', 'desc')->paginate($perPage);
	}
}
