<?php

namespace App\Http\Controllers\Back_Pannel;

use Image;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class FoodController extends Controller
{
    public function index()
    {
        $data=Food::all();
        return view('admin.food.foodmenu',compact('data'));
    }//end.........................

    public function create()
    {
        return view('admin.food.food_create');
    }//end.......................

    public function store(Request $request)
    {

        $request->validate([
            'name' =>'required',
            'price' =>'required',
            'discount' =>'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,gif|max:2048',
            'description' =>'required',

        ]);

        $food= new Food();

        $food->name=$request->name;
        $food->price=$request->price;
        $food->discount=$request->discount;

        if($request->hasFile('image'))

        {


            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $food->image=$imageName;

        }else{
            $food->image=' ';
        }

        $food->description=$request->description;

        $food->save();
        return redirect()->route('admin.food.list');

    } //end.......................

    public function edit($id)
    {
        $editData=Food::find($id);
        return view('admin.food.food_edit', compact('editData'));

    }// end.......................

    public function update(Request $request, $id)

     {


        $request->validate([
            'name' =>'required',
            'price' =>'required',
            'discount' =>'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,gif|max:2048',
            'description' =>'required',


        ]);

        $food=Food::where('id', $id)->first();


        $food->name=$request->name;
        $food->price=$request->price;
        $food->discount=$request->discount;

        if($request->hasFile('image'))

        {


            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $food->image=$imageName;

        }else{
            $food->image=' ';
        }

        $food->save();
        return redirect()->route('admin.food.list');

    }//end

    public function delete($id)
    {
        $data = Food::find($id);
        $data->delete();
        return redirect()->back();
    }//end

}
