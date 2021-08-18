<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Aboutus extends Controller
{
     public function index()
    {
         return view('customer.about_us');
    }
}
