<?php

namespace App\Http\Controllers;

use App\Models\Vetrina;
use Illuminate\Http\Request;

class CronJobController extends Controller
{
    public function aggiorna_vetrina(){
        ##Imposto il cambio prezzo dopo la mezzanotte del giorno dell'inserimento e non dopo 24h esatte.
        ##Metodo da richiamare tramite cron-job ogni giorno a mezzanotte

        $vetrina = Vetrina::all();
        
        foreach ($vetrina as $value) {
            $data1=date_create(date("Y-m-d",strtotime($value->created_at)));
            $data2=date_create();
            $diff=date_diff($data1,$data2);

            $differenza = $diff->format("%a");
            $sconto = [1,0.8,0.2];
            if (isset($sconto[$differenza])) {
                $prezzo_nuovo = $value->prezzo * $sconto[$differenza];
                $value->prezzo_nuovo = $prezzo_nuovo;
                $value->update();
            }else {
                $value->delete();
            }
        }

    }
}
