<?php

namespace App\Http\Controllers\Font_pannel;


use App\Models\Food;
use App\Models\Team;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function home()
    {
        $user_id=Auth::id();
        $count=Cart::where('user_id',$user_id)->count();
        $foods=Food::all();
        return \view('fontend.layouts.home',compact('foods','count'));
    }//end......

    public function menu()
    {
        $user_id=Auth::id();
        $count=Cart::where('user_id',$user_id)->count();
        $foods=Food::all();
        return \view('fontend.layouts.menu',compact('foods','count'));
    }//end.........

    public function about()
    {
        $user_id=Auth::id();
        $count=Cart::where('user_id',$user_id)->count();
        return \view('fontend.layouts.about',compact('count'));
    }//end..........

    public function table()
    {
        $user_id=Auth::id();
        $count=Cart::where('user_id',$user_id)->count();
        return \view('fontend.layouts.table',compact('count'));
    }//end..........
    public function ourteam()
    {
        $user_id=Auth::id();
        $count=Cart::where('user_id',$user_id)->count();
        $teams=Team::all();
        return \view('fontend.layouts.ourteam',compact('teams','count'));
    }//end..........
    public function cart(Request $request,$id)
    {
        if(Auth::id())
        {
            $user_id=Auth::id();
            $food_id=$id;
            $quantity=$request->quantity;

            $cart =new cart;
            $cart->user_id=$user_id;
            $cart->food_id=$food_id;
            $cart->quantity=$quantity;
            $cart->save();





            return redirect()->back();
        }
        else{
            return \redirect()->route('login');
        }
    }//end..........

}
