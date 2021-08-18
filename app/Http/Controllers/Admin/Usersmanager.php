<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\User;
class Usersmanager extends Controller
{
    public function index()
    {
         $category['category']=User::whereNotIn('role_id',['2'])->get();
      

        return view('admin.all_users',$category);
    }
   
}
