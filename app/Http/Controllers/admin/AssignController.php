<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AssignController extends Controller
{
    // user assign and remove roles and permission (start)
    public function AssignRoleToUser($id, Request $request)
    {
        $user = User::find($id);
        $user->assignRole($request->role);
        return redirect()->back()->with([
            "success" => "roles assigned with success"
        ]);
    }
    public function AssignPermissionToUser($id, Request $request)
    {
        $user = User::find($id);
        $user->givePermissionTo($request->permission);
        return redirect()->back()->with([
            "success" => "permission assigned with success"
        ]);
    }
    public function RemoveRoleFromUser($id, Request $request)
    {
        $user = User::find($id);
        $user->removeRole($request->role);
        return redirect()->back()->with([
            "success" => "role removed with success"
        ]);
    }
    public function RemovePermissionFromUser($id, Request $request)
    {
        $user = User::find($id);
        $user->revokePermissionTo($request->role);
        return redirect()->back()->with([
            "success" => "permission removed with success"
        ]);
    }
    // user assign and remove roles and permission (END)

    public function AssignPermissionToRole($id, Request $request)
    {
        $role = Role::find($id);
        if ($role->hasPermissionTo($request->permission)) {
            return redirect()->back()->with([
                "error" => "permission already set"
            ]);
        }
        $role->givePermissionTo($request->permission);
        return redirect()->back()->with('success', 'permission added successfly');
    }

    public function RemovePermissionFromRole($id, Request $request)
    {
        $role = Role::find($id);
        $role->revokePermissionTo($request->permission);
        return redirect()->back()->with('success', 'permission removed successfly');
    }
}
