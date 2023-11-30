<?php

namespace App\Http\Controllers\Font_pannel;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Toaster;


class ReservationController extends Controller
{
    public function index()
    {
        $reservations=Reservation::all();
        return view('admin.reservation.index',compact('reservations'));
    }//end............



    public function store(Request $request)
    {

        $request->validate([
            'name' =>'required',
            'email' =>'required|email',
            'phone' =>'required',
            'guest' =>'required',
            'date' =>'required',
            'time' =>'required',


        ]);

        $reservation= new Reservation();

        $reservation->name=$request->name;
        $reservation->email=$request->email;
        $reservation->phone=$request->phone;
        $reservation->guest=$request->guest;
        $reservation->date=$request->date;
        $reservation->time=$request->time;
        $reservation->save();


        return redirect()->back()->with('message','reservation done');

    }//end.............


    public function delete($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect()->back();
    }//end.............

    //fontend reservation page......
    public function reservation()
    {
        return view('fontend.reservation.reservation');
    }


}
