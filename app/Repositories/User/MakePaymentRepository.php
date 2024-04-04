<?php

namespace App\Repositories\User;

use Illuminate\Support\Facades\DB;

class MakePaymentRepository{

    public function makePayment($data){
        $payment=DB::insert([$data]);

        return $payment;
    }
}
