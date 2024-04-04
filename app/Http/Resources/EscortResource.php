<?php

namespace App\Http\Resources;

use App\Models\Profile_visit;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EscortResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => (string) $this->id,
            'user' => $this->user,
            'escort_name' => $this->escort_name,
            'whatsapp_number' => $this->whatsapp_number,
            'sexuality' => $this->sexuality,
            'age' => $this->age,
            'description' => $this->description,
            'photo' => $this->photo,
            'isVerified' => $this->isVerified,
            'quarter' => $this->quarter->quarter_name,
            'town' => $this->quarter->town->town_name,
            'shape' => $this->shape->shape_name,
            'height' => $this->height->height_name,
            'weight' => $this->weight->weight_name,
            'skin_color' => $this->skin_color->skin_color_name,
            'images' => $this->images,
            'services' => $this->services,
            'genre'=>$this->genre,
            'visits'=>Profile_visit::where('escort_id',$this->id)->count()
        ];
    }
}
