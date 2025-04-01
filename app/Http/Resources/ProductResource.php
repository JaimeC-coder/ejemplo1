<?php

namespace App\Http\Resources;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //**   'prodName',
        // 'price',
        // 'category_id' */
        return [
            'id' => $this->id,
            'name' => $this->prodName,
            'price' => $this->price,
            'created_at' => Carbon::parse($this->created_at)->format('d-m-Y'),
            'category' => [
                'id' => $this->category->id,
                'name' => $this->category->catName
            ]
        ];
    }
}
