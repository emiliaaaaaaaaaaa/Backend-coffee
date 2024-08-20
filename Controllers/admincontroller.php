<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminmodel;
use Illuminate\Support\Facades\Validator;

class admincontroller extends Controller
{
    //Mendapatkan menu
    public function getMenu(){
        $datamenu=adminodel::get();
        return response()->json($dataadmin);
    }
}
