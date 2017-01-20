<?php
namespace App\Repositories;

use App\Models\Permission;

class PermissionRepository
{
	public function all($perPage = 15)
	{
		return Permission::orderBy('created_at', 'desc')->paginate($perPage);
	}

	public function getByID($id)
	{
		return Permission::where('id', $id)->first();
	}
}
