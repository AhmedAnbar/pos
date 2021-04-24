<?php

namespace Modules\RolesPirmissions\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPirmissionsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $role = Role::create(['name' => 'admin']);

        $arrayOfPermissionNames = [
          'list-user', 'create-user', 'edit-user', 'delete-user',
          'list-role', 'create-role', 'edit-role', 'delete-role',
          'list-permission', 'create-permission', 'edit-permission', 'delete-permission',
          'list-category', 'create-category', 'edit-category', 'delete-category',
          'list-product', 'create-product', 'edit-product', 'delete-product',
          'list-vendor', 'create-vendor', 'edit-vendor', 'delete-vendor',
          'list-client', 'create-client', 'edit-client', 'delete-client',
        ];

        $permissions = collect($arrayOfPermissionNames)->map(function ($permission) {
            return ['name' => $permission, 'guard_name' => 'api', 'created_at' => now()];
        });
        Permission::insert($permissions->toArray());

        $role->givePermissionTo(Permission::all());


    }
}
