<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $allCategories = Category::all();
        //$allCategories = ['Category 1', 'Category 2', 'Category 3', 'Category 4', 'Category 5'];
        return view('second', ['categories' => $allCategories]);
    }
}
