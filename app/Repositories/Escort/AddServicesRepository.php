<?php

namespace App\Repositories\Escort;

use App\Models\Escort;

class AddServicesRepository{

    public function addServices($dataService,$newEscort){

        $escort=Escort::find($newEscort['id']);

            $escort->services()->attach($dataService);
            //return $serviceId;

        return $escort;
    }
}
