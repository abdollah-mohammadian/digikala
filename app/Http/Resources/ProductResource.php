<?php

namespace App\Http\Resources;

use App\Http\Resources\BrandResource;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'              => $this->id,
            'name'            => $this->name,
            'brand_id'        => $this->brand_id,
            'category_id'     => $this->category_id,
            'price'           => $this->price,
            'quantity'        => $this->quantity,
            'description'     => $this->description,
            'delivery_amount' => $this->delivery_amount,

            'brand'    => new BrandResource($this->whenLoaded('brand')),
            'category' => new CategoryResource($this->whenLoaded('category')),

            'features' => ProductFeatureResource::collection($this->whenLoaded('features')),
            'variants' => ProductVariantResource::collection($this->whenLoaded('variants')),
            'images'   => ProductImageResource::collection($this->whenLoaded('images')),

            'suggested_categories' => $this->whenLoaded('category',
                function ($category) {

                    if ($category->parent) {
                        $siblings = $category->parent
                            ->children()
                            ->where('id', '!=', $category->id)
                            ->get();
                    } else {
                        $siblings = $category->children;
                    }

                    return CategoryResource::collection($siblings);
                }
            ),

            'suggested_brands' => $this->whenLoaded('category',
                function ($category) {
                    $brands = $category->brands()
                    ->whereHas('products')
                    ->get();
                    return BrandResource::collection($brands);
                }
            ),
        ];
    }
}
