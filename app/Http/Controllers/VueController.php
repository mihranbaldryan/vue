<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use App\Service\Getname;
use App\InterfaceServer\NameInterface;

class VueController extends Controller
{
    public function vue(NameInterface $getname){

        return view('vue');
    }

    public function data(){
      
        $data=[
            'name'    => 'Mihran',
            'surname' => 'Baldryan'
        ];

        return response()->json($data);
     
     
    }

    public function store(Request $request){
        $fileName = time().'.'.$request->image->getClientOriginalExtension();
        // $request->image->storeAs('secure',$fileName);
        Storage::put('public', $request->image);
        dd($fileName);
    }

    public function getImage($slug){
        $image_path = storage_path('app/secure/'.$slug);
        Storage::get('file.jpg');

        return response()->file($image_path);
    }
    
}
