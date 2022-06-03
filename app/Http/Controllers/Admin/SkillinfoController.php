<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
class SkillinfoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function adminSkillInfo(){
      $adminSkillInfo=DB::table('skillinfos')->first();	
      return view('admin.skill_info',compact('adminSkillInfo'));
    }

    public function updateSkillInfo(Request $request,$id){
    	$validatedData = $request->validate([
        'title' => 'required',
     ]);

           $data=array();
           $data['title']=$request->title;
           $data['video_link']=$request->video_link;
           $update=DB::table('skillinfos')->where('id',$id)->update($data);
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


public function SkillInfoPhoto(Request $request,$id){
   
   $data=array(); 
   $oldBanner=$request->oldBanner;
   $oldVideo=$request->oldVideo;

   

   $banner=$request->banner;
   $video=$request->video;
   
   if($banner && $video){
    $banner_name=uniqid().'.'.$banner->getClientOriginalExtension();
    $video_name=uniqid().'.'.$video->getClientOriginalExtension();

    
    Image::make($banner)->resize(980,400)->save('public/skill/'.$banner_name);
    
  
    $data['banner']='public/skill/'.$banner_name;
    $data['video']='public/skill/'.$video_name;

    DB::table('skillinfos')->where('id',$id)->update($data);
    unlink($oldBanner);
    unlink($oldVideo);
    $notification=array(
      'messege'=>'Successfully Banner and Video update',
       'alert-type'=>'success'
         );
    return Redirect()->back()->with($notification);
   }
   if($banner){
    $banner_name=uniqid().'.'.$banner->getClientOriginalExtension();
    Image::make($banner)->resize(980,400)->save('public/skill/'.$banner_name);
    $data['banner']='public/skill/'.$banner_name;
    DB::table('skillinfos')->where('id',$id)->update($data);
    unlink($oldBanner);
    $notification=array(
      'messege'=>'Successfully Banner update',
       'alert-type'=>'success'
         );
    return Redirect()->back()->with($notification);
   }
   if($video){
    $video_name=uniqid().'.'.$video->getClientOriginalExtension();

    $data['video']='public/skill/'.$video_name;
    DB::table('skillinfos')->where('id',$id)->update($data);
    unlink($oldVideo);
    $notification=array(
      'messege'=>'Successfully Video update',
       'alert-type'=>'success'
         );
    return Redirect()->back()->with($notification);
   }
    $data['banner']=$oldBanner;
    $data['video']=$oldVideo;
    DB::table('skillinfos')->where('id',$id)->update($data);
    
    $notification=array(
    'messege'=>'Successfully Banner and Video update',
    'alert-type'=>'success'
     );
    return Redirect()->back()->with($notification);
}
}
