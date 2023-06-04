<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function UserInfo($id)
    {
        $roles = Role::all();
        $permissions = Permission::all();
        $user = User::find($id);
        return view('admin.user', compact('user','roles','permissions'));
    }
}
