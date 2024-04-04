<?php

namespace App\Http\Resources;

use App\Models\Announcement_visit;
use App\Models\Memberships_user;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AnnounceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
         return [
            "town_id"=>$this->town->id,
            "quarter"=>$this->quarter->id,
            "subscribe_id"=>$this->subscribe_id,
            "slug"=>$this->slug,
            'id' => (string) $this->id,
            'user' => $this->user,
            'age' => $this->age,
            'category' => $this->category,
            'town' => $this->town,
            'quarter' => $this->quarter,
            'status' => $this->status,
            'isSubscribe'=>$this->isSubscribe,
            'title' => $this->title,
            'description' => $this->description,
            'accepted' => $this->accepted,
            'location' => $this->location,
            'services' => $this->services,
            'images' => $this->images,
            'whatsapp' => $this->whatsapp,
            'gender' => $this->gender,
            'video' => $this->video_path,
            'visits'=>Announcement_visit::where('announcement_id',$this->id)->count()
        ];
    }
}
