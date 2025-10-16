<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::with('brands')->get();
        return CategoryResource::collection($categories);
    }


    public function show(Category $category)
    {
        return new CategoryResource($category->load('brands'));
    }
    

    public function categoriesMenu()
    {
        $mainCategories = Category::whereNull('parent_id')
            ->with([
                'children.brands', 
                'brands'           
            ])
            ->get();
    
        return CategoryResource::collection($mainCategories);
    }

}
