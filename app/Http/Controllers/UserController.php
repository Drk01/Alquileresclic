<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin')->only('getListForm');
    }

    public function getListForm()
    {
        return view('panel.users.list');
    }
}
