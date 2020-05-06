<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getListForm()
    {
        return view('panel.users.list');
    }
}
