<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name'=>'admin']);
        $role2 = Role::create(['name'=>'other']);
 
        Permission::create(['name'=>'admin.home'])->syncRoles($role);

        Permission::create(['name'=>'admin.users.index'])->syncRoles($role);
        Permission::create(['name'=>'admin.users.create'])->syncRoles($role);
        Permission::create(['name'=>'admin.users.edit'])->syncRoles($role);

        Permission::create(['name'=>'admin.categories.index'])->syncRoles($role);
        Permission::create(['name'=>'admin.categories.create'])->syncRoles($role);
        Permission::create(['name'=>'admin.categories.edit'])->syncRoles($role);
        Permission::create(['name'=>'admin.categories.destroy'])->syncRoles($role);
 
        Permission::create(['name'=>'admin.posts.index'])->syncRoles($role);
        Permission::create(['name'=>'admin.posts.create'])->syncRoles($role);
        Permission::create(['name'=>'admin.posts.edit'])->syncRoles($role);
        Permission::create(['name'=>'admin.posts.destroy'])->syncRoles($role);

        Permission::create(['name'=>'admin.tags.index'])->syncRoles($role);
        Permission::create(['name'=>'admin.tags.create'])->syncRoles($role);
        Permission::create(['name'=>'admin.tags.edit'])->syncRoles($role);
        Permission::create(['name'=>'admin.tags.destroy'])->syncRoles($role);
 
    }
}
