<?php

namespace App\Http\Controllers\Back_pannel;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {
        $teams=Team::all();
        return \view('admin.ourteam.index',compact('teams'));
    }//end

    public function create()
    {
        return \view('admin.ourteam.create');
    }//end

    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required|email',
            'phone' =>'required',
            'designation' =>'required',
            'image' => 'nullable|image|mimes:jpeg,png,gif|max:2048',


        ]);

        $team= new Team();

        $team->name=$request->name;
        $team->email=$request->email;
        $team->phone=$request->phone;
        $team->designation=$request->designation;

        if($request->hasFile('image'))

        {


            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $team->image=$imageName;

        }else{
            $team->image=' ';
        }

        $team->save();
        return redirect()->route('ourteam.index');
    }//end

    public function edit($id)
    {
        $team=Team::find($id);
        return view('admin.ourteam.edit', compact('team'));

    }// end
    public function update(Request $request, $id)

     {

        $request->validate([
            'name' =>'required',
            'email' =>'required|email',
            'phone' =>'required',
            'designation' =>'required',
            'image' => 'nullable|image|mimes:jpeg,png,gif|max:2048',


        ]);

        $team=Team::where('id', $id)->first();

        $team->name=$request->name;
        $team->email=$request->email;
        $team->phone=$request->phone;
        $team->designation=$request->designation;

        if($request->hasFile('image'))

        {


            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $team->image=$imageName;

        }else{
            $team->image=' ';
        }

        $team->save();
        return redirect()->route('ourteam.index');

    }//end

    public function delete($id)
    {
        $data = Team::find($id);
        $data->delete();
        return redirect()->back();
    }//end


}
