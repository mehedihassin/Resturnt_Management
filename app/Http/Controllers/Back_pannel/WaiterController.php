<?php

namespace App\Http\Controllers\Back_pannel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WaiterController extends Controller
{
    public function dashboard()
    {
        return \view('waiter.layouts.dashboard');
    }
}
