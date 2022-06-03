<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Message;
class SmsController extends Controller
{
    public function MessageStore(Request $request){
	$validatedData = $request->validate([
    'name' => 'required',
    'email' => 'required',
    'sub' => 'required',
    'message' => 'required',
    ]);

    $html = "Successfully Send";
   
    $message = New Message();
    $message->name = $request->name;
    $message->email = $request->email;
    $message->sub = $request->sub;
    $message->message = $request->message;

    $message->save();


    echo $html;
 
     
    }
}
