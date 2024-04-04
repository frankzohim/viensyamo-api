<?php

namespace App\Listeners;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ListenerCheckCreditSubscribe
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
        ->where('payment_of',"=","credit")
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

                        $paymentStatus=json_decode($response);
                        $data=$paymentStatus->data ?? null;
                        if($data->status==="ACCEPTED" && $data!==null){
                            $payment->status="1";
                            $payment->save();
                            $user=User::find($payment->user_id);
                            $user->balance=$user->balance+$payment->price;
                            $user->save();




                    return response()->json(['code'=>200,'message'=>'purchase credit successfully','balance'=>"votre nouvelle balance est de $user->balance"]);
                }else if($data->status==="REFUSED" && $data!==null){
                    $payment->status="1";
                    $payment->save();

                    return response()->json(['message'=>"payment refused"]);
                }
            }
        }
    }
}
