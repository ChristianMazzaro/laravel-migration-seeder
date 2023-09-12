<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//models
use App\Models\Train;

class TrainController extends Controller

        /*
            4 comandi crude fondamentali:
            C -> create
            R -> read -> divisa in 2: read di tutte le istanze e della singola istanza (all e single)
            U -> update
            D -> delete
        */

        //esempio:
        //public function index(){

            // $comics = config('comics');
    
            // $data = compact('comics');
    
            // //dd($data);
    
            // return view('home', $data);
        //}
{
    public function index(){
        //leggi tutt ele istanze di train 

        $trains = Train::all();

        return view('trains.index', compact('trains'));

        // foreach($trains as $train){
        //     dd([
        //         'titolo'=>$train->title,
        //         'titolo_originale'=>$train->original_title,
        //         'nazionalità'=>$train->nationality,
        //         'data_duscita'=>$train->date,
        //         'voto'=>$train->vote,
        //     ]);
        // }

        // dd($trains);
    }

    public function show($id){
        //leggi la singola istanza di train
    }
}
