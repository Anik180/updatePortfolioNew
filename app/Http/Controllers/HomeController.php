<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
       $sms=DB::table('messages')->latest()->get(); 
        return view('home',compact('sms'));
    }

    
    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }
}
