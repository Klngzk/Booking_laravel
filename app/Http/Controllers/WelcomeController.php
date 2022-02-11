<?php

namespace App\Http\Controllers;
use App\Models\Hebergement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){
        $city = DB::table('hebergements')->select('city')->distinct()->get()->pluck('city');
        $type = DB::table('hebergements')->select('type')->distinct()->get()->pluck('type');
        return view('welcome',compact('city','type'));
    }
}
