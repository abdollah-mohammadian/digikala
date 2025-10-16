<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductVariantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'variant_type' => $this->variant_type,
            'variant_value' => $this->variant_value,
            'variant_hex' => $this->variant_hex,
            'price_modifier' => $this->price_modifier,
            'stock_quantity' => $this->stock_quantity,
            'variant_image' => $this->variant_image,
        ];
    }
}
