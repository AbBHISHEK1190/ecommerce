<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Contactus extends Controller
{
    public function index()
    {
         return view('customer.contact');
    }
}
