<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Hebergement as ModelsHebergement;


class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
    $city = DB::table('hebergements')->select('city')->distinct()->get()->pluck('city');
    $type = DB::table('hebergements')->select('type')->distinct()->get()->pluck('type');
    $available = DB::table('hebergements')->select('available')->distinct()->get()->pluck('available');
    
    $postsInRange = $request->has('city')
    ? ModelsHebergement::where('city', $request->city)->where('type', $request->type)->get()
    : [];

    
    
    return view('pages.search', [
    'city' => $city,
    'type' => $type,
    'available' => $available,
    'hebergement' => $postsInRange,
    ]);
      
    
       }
    
       public function store(Request $request)
       {
           // This will return all request data to your screen.
           return $request->all();
           return view('pages.search');
       }
    
       public function show($id)
       {
           $hebergement = ModelsHebergement::find($id);
           return view('articles.show',compact('hebergement','user'));
       }
    
     
    
}
