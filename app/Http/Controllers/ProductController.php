<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('brand','category', 'category.brands', 'images')->get();
        return ProductResource::collection($products->load('brand'));
    }


    public function show(Product $product)
    {
        $product->load(['features', 'variants', 'images', 'brand','category']);
        return new ProductResource($product);
    }

    public function search(Request $request)
    {
        $query = Product::with([
            'brand',
            'category.parent',
            'category.children',
            'category.brands',
            'features',
            'variants',
            'images' ,
            'category.products'
        ]);

    
        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('name', 'LIKE', '%' . $searchTerm . '%')
                  ->orWhere('description', 'LIKE', '%' . $searchTerm . '%');
            });
        }
    
        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }
    
        if ($request->has('brand_id')) {
            $query->where('brand_id', $request->brand_id);
        }
    
        $products = $query->get();
        return ProductResource::collection($products);
    }


    

}
