<?php

namespace App\Listeners;

use App\Models\Membership;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;

class ListenerCheckPlanSubscribe
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event)
    {
        $payments=Payment::where('transaction_id',"!=",null)
        ->where('payment_of',"=","premium")
        ->get();

        if(isset($payments)){

            foreach($payments as $payment){

                $response=Http::acceptJson()->withBody(
                    json_encode(
                        [
                            "apikey"=>"108089145655d2b949d7a99.42080516",
                            "site_id"=>"5866009",
                            "transaction_id"=>$payment->transaction_id
                          ]),'application/json')->post('https://api-checkout.cinetpay.com/v2/payment/check',[

                ]);
                $user=User::find($payment->user_id);
                $memberShip=Membership::find($payment->membership_id);
                $paymentStatus=json_decode($response);
                $data=$paymentStatus->data ?? null;

                if($data==="ACCEPTED" && $data!==null){
                        $user->isSubscribe=1;
                        $payment->status="2";
                        $payment->save();
                    if($user->save()){


                        $newDateTime = Carbon::now()->addDay(intval($memberShip->period));
                        $newDateTime->setTimezone('Africa/Douala');
                        DB::table('members')->insert([
                            'user_id'=>$user->id,
                            'membership_id'=>4,
                            'payment_id'=>$payment->id,
                            'expire_at'=>$newDateTime,
                            'status'=>1
                        ]);

                        return response()->json(["code"=>200,"message"=>"Soubscription au forfait $memberShip->membership_name avec success."]);




                    }
                }else if($data->status==="REFUSED" && $data!==null){
                    $payment->status="1";
                    $payment->save();

                    return response()->json(['message'=>"payment refused"]);
                }
            }
        }
    }
}
