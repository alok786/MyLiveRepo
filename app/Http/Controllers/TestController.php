<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test(){
       return view('test');
    }

    public function index(){
        $arr = [
            "Personal_info"=>"alok",
            "Personal_addess"=>[
                "State"=>"Assam"
            ],
            "Perosnal_vehicle"=>[
                "Two_wheeler"=>4,
                "Four_wheeler"=>1

            ],
        ];
        return view('TEst/Test',['arr'=>$arr]);
    }
}
