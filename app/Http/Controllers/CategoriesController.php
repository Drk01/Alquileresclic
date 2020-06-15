<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('saveEditedCategory', 'deleteCategory', 'getMainCategories', 'getSecondaryCategories', 'getAdsByCategory');
        $this->middleware('isAdmin')->except('saveEditedCategory', 'deleteCategory', 'getMainCategories', 'getSecondaryCategories', 'getAdsByCategory');
        $this->middleware('isAdminToken')->only('saveEditedCategory', 'deleteCategory');
    }

    public function getCategoriesList()
    {
        return view('panel.categories.list', ['categories' => Category::all()]);
    }

    public function getCreateCategoryForm()
    {
        $categories = Category::all();
        return view('panel.categories.create', compact('categories'));
    }

    public function postCategory(Request $request)
    {
        Category::create($request->all());
        return redirect()->back()->with(['categoryCreated' => true]);
    }

    public function saveEditedCategory(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->parent_id = $request->parent_id || "No";
        $category->save();
    }

    public function deleteCategory($id)
    {
        Category::destroy($id);
    }

    public function getMainCategories()
    {
        return Category::where('parent_id', 'No')->get();
    }

    public function getSecondaryCategories($id)
    {
        return Category::where('parent_id', $id)->get();
    }

    public function getAdsByCategory($category, $id)
    {
        $ads = Ad::whereHas('categories', function ($register) use ($id) {
            $register->where('category_id', $id)->where('status', 'Aprobado');
        });

        return view('FrontEnd.showByCategory', compact('ads'));
    }
}
