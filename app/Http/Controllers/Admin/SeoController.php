<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class SeoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminSeo(){
       $adminSeo=DB::table('seos')->first();
       return view('admin.seo',compact('adminSeo'));
    }

    public function updateSeo(Request $request,$id){


	   $data=array();
	   $data['meta_author']=$request->meta_author;
	   $data['meta_title']=$request->meta_title;
	   $data['meta_keyword']=$request->meta_keyword;
	   $data['meta_description']=$request->meta_description;
	   $data['google_analytics']=$request->google_analytics;
	   $data['google_verification']=$request->google_verification;
	   $data['alexa_analytics']=$request->alexa_analytics;
	   $update=DB::table('seos')->where('id',$id)->update($data);
	    if($update){
	       $notification=array(
	                    'messege'=>'Successfully Update ',
	                    'alert-type'=>'success'
	                    );
	       return Redirect()->back()->with($notification);
	    }else{
	       $notification=array(
	                    'messege'=>'Sorry',
	                    'alert-type'=>'error'
	                    );
	       return Redirect()->back()->with($notification);
	    }

}
}
