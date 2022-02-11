<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hebergement;
use App\Models\Booking;
class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       
        // $hebergement  = Hebergement::all();
        
        $booking = Booking::all();
        
        return view('booking.index',compact('booking'));
    }
    public function store(Request $request)
    {
        $date = new Booking([
            'date_a'=> $request->get('date_a'),
            'date_de'=>$request->get('date_de'),
            'person'=>$request->get('person'),
            'rooms'=>$request->get('rooms'),
            'hebergement_id'=>$request->get('hebergement_id'),
            'user_id'=>$request->get('user_id'),
        ]);
        $date->save();
 
        return redirect('/booking')->with('success','Booking done');

    }

    // public function show($id)
    // {
    //     $booking = Booking::find($id);
    //     $hebergement = Hebergement::all();
    //     return view('booking.show',compact('hebergement','booking'));
    // }

    public function destroy($id)
    {
        Booking::find($id)->delete();
        return redirect()->route('booking.index')->with('success','Bookin deleted success');
    }
}
