<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculater extends Controller
{
    //
    function cal(Request $req){
        $req -> validate([
            'english'=>'required',
            'maths'=>'required',
            'physics'=>'required',
            'chemistry'=>'required',
            'social'=>'required'
        ]);
        
        $a = $_REQUEST["english"];
        $b = $_REQUEST["maths"];
        $c = $_REQUEST["physics"];
        $d = $_REQUEST["chemistry"];
        $e = $_REQUEST["social"];

        
        $f = $a + $b + $c + $d + $e;
        $per = round(($f * 100)/500,2);
        $stper = "Percentage : ";
        $stgrad = "Grade: ";
        $g = "";
        if($per >= 90){
            return $stgrad."A"." </br>".$stper.$per;
        }elseif($per >= 80){
            return $stgrad."B"." </br>".$stper.$per;
        }elseif($per >= 70){
            return $stgrad."C"." </br>".$stper.$per;
        }elseif($per >= 60){
            return $stgrad."D"." </br>".$stper.$per;
        }elseif($per >= 50){
            return $stgrad."F"." </br>".$stper.$per;

    }
    
}
}