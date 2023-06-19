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
        Permission::create(['name' => 'crud_posts']);
        Permission::create(['name' => 'chat']);
        Permission::create(['name' => 'comment']);
        User::find(2)->givePermissionTo(['crud_posts','chat','comment']);
    }
}
