<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // crud_posts
        // Permission::create(['name' => 'crud_posts']);
        // Permission::create(['name' => 'chat']);
        $role = Role::find(2);
        $role->givePermissionTo('crud_posts');
        $user = User::find(3);
        // $user->
        // $role->givePermissionTo('edit articles');
    }
}
