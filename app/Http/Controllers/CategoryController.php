<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function adminCategoryList()
    { 
        $categories = Category::all();
        return view('admin/categories',['categories' => $categories]);
    }

    public function create()
    { 
        $allCategories = Category::all();
        return view('admin/category-edit',['categories'=>$allCategories]);
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->parent_id = $request->category['categoryParent'];
        $category->title = $request->category['categoryTitle'];
        $category->description = $request->category['categoryDescription'];
        $category->content = $request->category['categoryContent'];
        $category->save();
    }
}
