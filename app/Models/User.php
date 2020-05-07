<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasAnyRole($roles)
    {
        return null !== $this->roles()->whereIn("name", $roles)->first();
    }

    public function is_super_admin()
    {
        return $this->hasAnyRole([Role::$RoleSuperAdmin]);
    }

    public function is_admin()
    {
        return $this->hasAnyRole([Role::$RoleAdmin]);
    }

    public function is_visitor()
    {
        return $this->hasAnyRole([Role::$RoleVisitor]);
    }

    public function is_executor()
    {
        return $this->hasAnyRole([Role::$RoleExecutor]);
    }

    public function is_user()
    {
        return $this->hasAnyRole([Role::$RoleUser]);
    }



}
