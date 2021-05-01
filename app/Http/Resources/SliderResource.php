<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SliderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $slider = [
            'id' => $this->id,
            'name' => $this->name,
            'image_path' => $this->getImagePathAttribute(),
            'is_active' => $this->is_active
        ];
        return $slider;
    }
}
