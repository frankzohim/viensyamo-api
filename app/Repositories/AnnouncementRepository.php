<?php

namespace App\Repositories;
use App\Interfaces\AnnouncementInterface;
use App\Models\Announcement;
use App\Models\Town;
use App\Http\Resources\TownResource;
use Illuminate\Support\Facades\DB;

class AnnouncementRepository implements AnnouncementInterface
{
    public function getAllAnnouncements()
    {
        return Annoucement::all();
    }

    public function getAnnouncementById($AnnouncementId)
    {
        return Announcement::findOrFail($AnnouncementId);
    }

    public function deleteAnnouncement($AnnouncementId)
    {
        Announcement::destroy($AnnouncementId);
    }

    public function createAnnouncement(array $AnnouncementDetails)
    {
        return Announcement::create($AnnouncementDetails);
    }

    public function updateAnnouncement($AnnouncementId, array $newDetails)
    {
        return Announcement::whereId($AnnouncementId)->update($newDetails);
    }

      public function fakerAnnouncementByTown($data){

        //loop over the collection and fake the number of announcement by town
        $data->map(function($element){
            $element['totalAnnounces'] = $element['totalAnnounces'] + rand(10, 100);

        });
        return $data;
    }

    public function getAnnouncementsByTown()
    {
       $data = DB::table('announcements')
         ->where('status', '=', 1)
         ->leftjoin('towns', 'towns.id', '=','announcements.town_id')
                            ->select('town_id','town_name', DB::raw('count(*) as totalAnnounces'))
                            ->groupBy('town_name')
                            ->orderBy('totalAnnounces', 'DESC')
                            ->get();
         //loop over the collection and fake the number of announcement by town
        $data->map(function($element){
            $element->totalAnnounces = $element->totalAnnounces*3 +  ceil($element->totalAnnounces*12/11);
            return $element;

        });
        $towns = TownResource::collection(Town::all());
        $final[0] = $data;
        $final[1] = $towns;
        return $final;

    }


}
