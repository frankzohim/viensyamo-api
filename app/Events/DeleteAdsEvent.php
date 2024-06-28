<?php

namespace App\Events;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Announcement;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class DeleteAdsEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct()
    {
        $ads=Announcement::where('isSubscribe','=',0)
        ->where('status', '=', 1)
        ->get();
       
        foreach($ads as $ad){
           
            if(gettype($ad->expire)!='NULL' ){
               
                if(now()->diffInDays(Carbon::parse($ad->expire)) > 14){
                    $ad->status=0;
                    $ad->save();
                }
            }
            else{
                
                if(now()->diffInDays(Carbon::parse($ad->created_at)) > 14){
                    $ad->status=0;
                    $ad->save();
                    
                }
            }
             
           
        }

         DB::table('visits')->insert([
            'ip' => request()->ip(),
            'created_at' => Carbon::now(),
        ]);
       
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
