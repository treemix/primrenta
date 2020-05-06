<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_super_admin = new Role();
        $role_super_admin->name = Role::$RoleSuperAdmin;
        $role_super_admin->save();

        $role_admin = new Role();
        $role_admin->name = Role::$RoleAdmin;
        $role_admin->save();

        $role_visitor = new Role();
        $role_visitor->name = Role::$RoleVisitor;
        $role_visitor->save();

        $role_user = new Role();
        $role_user->name = Role::$RoleUser;
        $role_user->save();

        $role_executor = new Role();
        $role_executor->name = Role::$RoleExecutor;
        $role_executor->save();

    }
}
