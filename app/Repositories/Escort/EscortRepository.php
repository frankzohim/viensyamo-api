<?php

namespace App\Repositories\Escort;

use App\Interfaces\Escorts\EscortInterface;
use App\Models\Escort;
use App\Models\Quarter;
use App\Models\Town;
use Illuminate\Support\Facades\DB;

class EscortRepository implements EscortInterface 
{
    public function getAllEscorts() 
    {
        return Escort::all();
    }

    public function getEscortById($EscortId) 
    {
        return Escort::findOrFail($EscortId);
    }

    public function deleteEscort($EscortId) 
    {
        Escort::destroy($EscortId);
    }

    public function updateEscort($EscortId, array $newDetails) 
    {
        return Escort::whereId($EscortId)->update($newDetails);
    }

    public function getEscortsWithTownName()
    {
        $escorts = $this->getAllEscorts();

        //  //loop over the collection and fake the number of Escort by town
        $escorts->map(function($escort){
           
             //Retrieving town name and quarter
             $quarter = Quarter::find($escort->quarter_id);

             $escort['town'] = $quarter->town->town_name;
             $escort['quarter'] = $quarter->quarter_name;

             //Retrieving Escort username
             $escort['username'] = $escort->User->username;
             return $escort;

        });
        return $escorts;
                            
    }

  
}
