<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FrontblogController extends Controller
{
    public function singleBlog($id,$slug)
    {
        
        $homeSlider=DB::table('sliders')->first();
        $aboutMe=DB::table('abouts')->first();
        $config=DB::table('contacts')->first();
        $logo=DB::table('logos')->first(); 
        $blog=DB::table('blogs')
			->where('blogs.id',$id)
			->first();

        return view('front.single_blog',compact('blog','logo','config','aboutMe','homeSlider'));
    }

}
