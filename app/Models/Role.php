<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    public static $RoleSuperAdmin = "super_admin";
    public static $RoleAdmin = "admin";
    public static $RoleVisitor = "visitor";
    public static $RoleUser = "user";
    public static $RoleExecutor = "executor";


    protected $fillable = [
        'name'
    ];

    protected $hidden = [ ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }


}
