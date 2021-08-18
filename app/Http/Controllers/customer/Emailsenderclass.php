<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Mail;
use Mail;
class Emailsenderclass extends Controller
{
    public function index()
    {
        $data=['name'=>'abhishek','data'=>'Hello Abhishek'];
        $user['to']='testabhitest331@gmail.com';
         Mail::send('emailview',$data, function($message) use ($user) {
$message->from('testabhitest331@gmail.com');
$message->to('testabhitest331@gmail.com');
$message->subject('Hello abhi');

});
    }
}
