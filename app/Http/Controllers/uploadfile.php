<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadfile extends Controller
{
    //
    function uploader(Request $req ){
        return ($req->file('file')->store('files'));
    }
}
