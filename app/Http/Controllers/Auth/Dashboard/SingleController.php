<?php

namespace App\Http\Controllers\Auth\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SingleController extends Controller
{
    public function index(){
    	return view('single');
    }
}
