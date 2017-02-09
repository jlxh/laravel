<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;
protected $permissions;

    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        $this->permissions = session('permissions');
    }

    /**
     * Determine whether an administrator has the permission to update a role.
     * 
     * @param  Admin  $admin
     * @param  Role   $role
     * @return boolean
     */
    public function before($admin, $ability)
    {
        return in_array($ability.'-admin', $this->permissions);
    }
}
