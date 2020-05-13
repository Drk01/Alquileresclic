<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isAdmin');
    }

    public function getCategoriesList()
    {
        return view('panel.categories.list');
    }

    public function getCreateCategoryForm()
    {
        $categories = Category::all();
        return view('panel.categories.create', compact('categories'));
    }
    }
}
