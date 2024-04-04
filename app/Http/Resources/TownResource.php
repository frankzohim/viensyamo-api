<?php

namespace App\Http\Resources;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TownResource extends JsonResource
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
            'town_name' => $this->town_name,
            'code' =>$this->code,
            'country' =>$this->country,
            'ads' => $this->ads()->count(),
            'quarters' => $this->quarters()->count(),
            'users' => $this->users()->count(),
            'escorts'=>User::where('role_id',2)->count()
        ];
    }
}
