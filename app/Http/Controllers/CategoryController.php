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

        //dd(gettype($categories));

        return view('admin/categories',['categories' => $categories]);
    }

}
