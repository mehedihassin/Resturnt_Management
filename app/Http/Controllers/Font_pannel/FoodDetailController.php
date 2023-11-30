<?php

namespace App\Http\Controllers\Font_pannel;

use App\Models\Food;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FoodDetailController extends Controller
{
    public function fooddetail()
    {
        $foods=Food::all();
        return view('fontend.foodDetails.food_details', compact('foods'));
    }
}
