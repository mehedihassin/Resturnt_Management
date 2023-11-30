<?php

namespace App\Http\Controllers\Font_pannel;

use App\Models\Food;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function home()
    {
        $foods=Food::all();
        return \view('fontend.layouts.home',compact('foods'));
    }//end......

    public function menu()
    {
        $foods=Food::all();
        return \view('fontend.layouts.menu',compact('foods'));
    }//end.........

    public function about()
    {
        return \view('fontend.layouts.about');
    }//end..........

    public function table()
    {
        return \view('fontend.layouts.table');
    }//end..........
    public function ourteam()
    {
        $teams=Team::all();
        return \view('fontend.layouts.ourteam',compact('teams'));
    }//end..........
}
