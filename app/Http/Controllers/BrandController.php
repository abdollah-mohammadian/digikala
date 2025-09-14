<?php

namespace App\Http\Controllers;

use App\Http\Resources\BrandResource;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    
    public function index()
    {
        $brands = Brand::all();
        return BrandResource::collection($brands);
    }

    public function show(Brand $brand)
    {
        return new BrandResource($brand->load('products'));
    }

}
