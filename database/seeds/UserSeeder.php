<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_super_admin = Role::where('name', Role::$RoleSuperAdmin)->first();
        $role_admin = Role::where('name', Role::$RoleAdmin)->first();
        $role_visitor = Role::where('name', Role::$RoleVisitor)->first();
        $role_user = Role::where('name', Role::$RoleUser)->first();
        $role_executor = Role::where('name', Role::$RoleExecutor)->first();


        $super_admin_first = new User();
        $super_admin_first->name = "treemix";
        $super_admin_first->email = "treemix@gmail.com";
        $super_admin_first->password = bcrypt("admin@19880205");
        $super_admin_first->save();
        $super_admin_first->roles()->attach($role_super_admin);


    }
}
