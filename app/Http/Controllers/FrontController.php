<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Message;
class FrontController extends Controller
{
    public function index(){
		$homeSlider=DB::table('sliders')->first();
		$aboutMe=DB::table('abouts')->first();
		$skillBar=DB::table('skills')->get();
		$skillInfo=DB::table('skillinfos')->first();
		$category = DB::table('categories')->get();
		$project=DB::table('projects')
                   ->join('categories','projects.category_id','categories.id')
                   ->select('categories.category_name','projects.*')
                   ->get();	
    $certificate=DB::table('certificates')->get();
    $blog=DB::table('blogs')->get();
    $config=DB::table('contacts')->first();
    $cv=DB::table('cvs')->first();
    $logo=DB::table('logos')->first();           
		return view('front.index',compact('homeSlider','aboutMe','skillBar','skillInfo','category','project','certificate','config','cv','logo','blog'));
    }



}
