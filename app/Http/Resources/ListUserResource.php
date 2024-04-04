<?php

namespace App\Http\Resources;

use App\Models\Role;
use App\Models\Town;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'username'=>$this->username,
            'email'=>$this->email,
            'phone_number'=>$this->phone_number,
            'isVerify'=>$this->isVerify,
            'town'=>Town::where('id',$this->town_id)->get('town_name')->first(),
            'suspended_at'=>$this->suspended_at,
            'balance'=>$this->balance,
            'role'=>Role::where('id',$this->role_id)->get('role_name')->first(),
        ];
    }
}
