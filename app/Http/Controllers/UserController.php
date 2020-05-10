<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin')->only('getListForm');
        $this->middleware('isAdmin&Super')->only('userBlocker');
    }

    public function getListForm()
    {
        $users = User::all();
        return view('panel.users.list', compact('users'));
    }
}
