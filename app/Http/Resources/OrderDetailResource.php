<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'reference'=> $this->reference,
            'name' => $this->product->name,
            'description' => $this->product->description,
            'price' => $this->product->price,
            'qty' => $this->qty,
            'total' => $this->price,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
        ];
        //return parent::toArray($request);
    }
}
