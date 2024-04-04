<?php

namespace App\Repositories\Escort;

use App\Models\Escort;
use Illuminate\Support\Facades\DB;
use App\Services\Photos\SaveInFolderService;

class AddProfileRepository{

    public function addProfile($data){
        $newEscort=Escort::create($data);

        // if(isset($newEscort)){
        //     //$image_path = $request->store('products', 'public');
        //     $saveInFolder=(new SaveInFolderService())->saveIn($photo,'profile');
        // }

        return $newEscort;
    }
}
