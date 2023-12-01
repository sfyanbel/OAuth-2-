<?php

namespace App\Http\Controllers;

use App\Models\ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    
    public function allAds() {
            $ads=ads::all();
            return response()->json(['ads' =>  $ads]);
    }
}
