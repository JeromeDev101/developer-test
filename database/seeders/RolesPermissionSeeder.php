<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'product-create']);
        Permission::create(['name' => 'product-read']);
        Permission::create(['name' => 'product-update']);
        Permission::create(['name' => 'product-delete']);

        Permission::create(['name' => 'product-category-create']);
        Permission::create(['name' => 'product-category-read']);
        Permission::create(['name' => 'product-category-update']);
        Permission::create(['name' => 'product-category-delete']);

        Permission::create(['name' => 'user-management-access']);

        $administrator = Role::create(['name' => 'Administrator']);
        $administrator->givePermissionTo([
            'product-create',
            'product-read',
            'product-update',
            'product-delete',
            'product-category-create',
            'product-category-read',
            'product-category-update',
            'product-category-delete',
            'user-management-access'
        ]);
        $user = Role::create(['name' => 'User']);
        $user->givePermissionTo([
            'product-create',
            'product-read',
            'product-update',
            'product-delete',
            'product-category-create',
            'product-category-read',
            'product-category-update',
            'product-category-delete'
        ]);

    }
}
