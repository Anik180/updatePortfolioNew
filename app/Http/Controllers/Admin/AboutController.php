<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
use App\Models\Cv;
class AboutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function adminAbout(){
    	$adminAbout=DB::table('abouts')->first();	
      return view('admin.about',compact('adminAbout'));
    }

    public function updateAbout(Request $request,$id){
     $data=array();
     $data['about_title']=$request->about_title;
     $data['about_subTitle']=$request->about_subTitle;
     $data['description']=$request->description;
     $update=DB::table('abouts')->where('id',$id)->update($data);
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

  public function aboutPhoto(Request $request,$id){
   
   $data=array(); 

   $oldPhoto=$request->oldPhoto;
   
   $photo=$request->photo;
   if($photo){
    $photo_name=uniqid().'.'.$photo->getClientOriginalExtension();
    Image::make($photo)->resize(463,474)->save('public/about/'.$photo_name);
    $data['photo']='public/about/'.$photo_name;
    DB::table('abouts')->where('id',$id)->update($data);
    unlink($oldPhoto);
    $notification=array(
      'messege'=>'Successfully Photo update',
       'alert-type'=>'success'
         );
    return Redirect()->back()->with($notification);
   }
    $data['photo']=$oldPhoto;
    DB::table('abouts')->where('id',$id)->update($data);
    
    $notification=array(
    'messege'=>'Successfully Photo update',
    'alert-type'=>'success'
     );
    return Redirect()->back()->with($notification);
}

  public function adminCv(){
    $adminCv=DB::table('cvs')->first(); 
    return view('admin.cv',compact('adminCv'));
}
public function updateCv(Request $request,$id){
   $cv  = Cv::find($id);
    
    
    if($request->hasfile('cv'))

    {   
    $file = $request->file('cv');
        $extension = $request->cv->getClientOriginalExtension();  //Get Image Extension
        $fileName = uniqid().'.'.$extension;  //Concatenate both to get FileName (eg: file.jpg)
        $file->move('public/about/', $fileName);  
        $data = $fileName; 
        $cv->cv = $data;
        unlink("public/about/" . $cv->cv);
    }

    
     $cv->save();
     $notification=array(
      'messege'=>'Successfully CV update',
      'alert-type'=>'success'
       );
      return Redirect()->back()->with($notification);
}
}
