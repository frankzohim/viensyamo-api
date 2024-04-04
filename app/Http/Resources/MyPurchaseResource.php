<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MyPurchaseResource extends JsonResource
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
            'user_id'=>$this->user_id,
            'payment_type'=>$this->payment->payment_type,
            'membership_type'=>$this->membership->membership_name,
            'membership_id'=>$this->membership->id,
            'membership_price'=>$this->membership->price,
            'announce_id'=>$this->announcement->id,
            'slug'=>$this->announcement->slug,
            'announce_title'=>$this->announcement->title,
            'expire_at'=> Carbon::parse($this->expire_at)->format('d-m-Y H:i'),
            'status'=>$this->status
        ];
    }
}
