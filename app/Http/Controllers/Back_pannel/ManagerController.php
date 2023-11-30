<?php

namespace App\Http\Controllers\Back_pannel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function dashboard()
    {
        return \view('manager.layouts.dashboard');
    }
}
