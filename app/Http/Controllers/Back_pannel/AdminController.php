<?php

namespace App\Http\Controllers\Back_pannel;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        return \view('admin.layouts.dashboard');
    }

    public function show()
    {
        $datas=User::all();
        return view('admin.layouts.user',compact('datas'));
    }

    public function distroy($id)
    {
        $data=User::find($id);
        $data->delete();
        return \redirect()->back();
    }
}
