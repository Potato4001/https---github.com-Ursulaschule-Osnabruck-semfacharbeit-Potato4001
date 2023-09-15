<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
   /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'give permission']);
        Permission::create(['name' => 'create events']);
        Permission::create(['name' => 'edit commitments']);
        Permission::create(['name' => 'manage treasury']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'coach']);
        $role1->givePermissionTo('create events');
        $role1->givePermissionTo('edit commitments');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('give permission');
        $role2->givePermissionTo('create events');
        $role2->givePermissionTo('edit commitments');
        $role2->givePermissionTo('manage treasury');
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        $role3 = Role::create(['name' => 'captain']);
        $role3->givePermissionTo('edit commitments');

        $role4 = Role::create(['name' => 'treasurer']);
        $role4->givePermissionTo('manage treasury');

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Example Coach User',
            'email' => 'test@example.com',
        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Admin User',
            'email' => 'admin@example.com',
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Captain User',
            'email' => 'superadmin@example.com',
        ]);
        $user->assignRole($role3);
    }
}
