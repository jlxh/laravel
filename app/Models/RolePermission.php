<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'role_permissions';

    /**
     * Disable the timestamps.
     *
     * @var bool
     */
    protected $timestamps = false;
}
