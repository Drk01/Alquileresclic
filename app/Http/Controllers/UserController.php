<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin&Super')->only('getListForm');
        $this->middleware('isAdmin&SuperToken')->only('userBlocker');
        $this->middleware('isAdminToken')->only('userRoleChanger');
    }

    public function getListForm()
    {
        $users = User::all();
        return view('panel.users.list', compact('users'));
    }

    public function userBlocker($id)
    {
        $user = User::find($id);
        if ($user->role != 1) {
            $user->block = !$user->block;
        }
        $user->save();
    }

    public function userRoleChanger($id)
    {
        $user = User::find($id);
        if ($user->role == 2) {
            $user->role = 0;
        } else {
            $user->role = 2;
        }
        $user->save();
    }
}
