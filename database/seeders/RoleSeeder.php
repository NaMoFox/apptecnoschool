<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role1 = Role::create(['name' => 'Admin']);
      $role2 = Role::create(['name' => 'Teacher']);

      Permission::create(['name'=>'admin.home'])->syncRoles([$role1, $role2]);

      Permission::create(['name' => 'admin.teacher.index'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.teacher.create'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.teacher.edit'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.teacher.destroy'])->syncRoles([$role1, $role2]);

      Permission::create(['name' => 'admin.student.index'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.student.create'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.student.edit'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.student.destroy'])->syncRoles([$role1, $role2]);

      Permission::create(['name' => 'admin.pater.index'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.pater.create'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.pater.edit'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.pater.destroy'])->syncRoles([$role1, $role2]);
    }
}
