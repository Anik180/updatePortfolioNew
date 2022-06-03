<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function adminSlider(){
    	$adminSlider=DB::table('sliders')->first();	
      return view('admin.slider',compact('adminSlider'));
    }

    public function updateSlider(Request $request,$id){
    	$validatedData = $request->validate([
        'slider_name' => 'required',
        'slider_title' => 'required',
        'slider_link' => 'required',
     ]);

           $data=array();
           $data['slider_name']=$request->slider_name;
           $data['slider_title']=$request->slider_title;
           $data['slider_link']=$request->slider_link;
           $update=DB::table('sliders')->where('id',$id)->update($data);
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

public function updatePhoto(Request $request,$id){
   
   $data=array(); 
   $oldSlider=$request->oldSlider;
   $oldPhoto=$request->oldPhoto;
   

   $slider=$request->slider;
   $photo=$request->photo;
   if($slider && $photo){
    $slider_name=uniqid().'.'.$slider->getClientOriginalExtension();
    $photo_name=uniqid().'.'.$photo->getClientOriginalExtension();

    
    Image::make($slider)->resize(1920,887)->save('public/slider/'.$slider_name);
    Image::make($photo)->resize(347,546)->save('public/slider/'.$photo_name);
  
    $data['slider']='public/slider/'.$slider_name;
    $data['photo']='public/slider/'.$photo_name;

    DB::table('sliders')->where('id',$id)->update($data);
    unlink($oldSlider);
    unlink($oldPhoto);
    $notification=array(
      'messege'=>'Successfully Slider and Photo update',
       'alert-type'=>'success'
         );
    return Redirect()->back()->with($notification);
   }
   if($slider){
    $slider_name=uniqid().'.'.$slider->getClientOriginalExtension();
    Image::make($slider)->resize(1920,887)->save('public/slider/'.$slider_name);
    $data['slider']='public/slider/'.$slider_name;
    DB::table('sliders')->where('id',$id)->update($data);
    unlink($oldSlider);
    $notification=array(
      'messege'=>'Successfully Slider update',
       'alert-type'=>'success'
         );
    return Redirect()->back()->with($notification);
   }
   if($photo){
    $photo_name=uniqid().'.'.$photo->getClientOriginalExtension();
    Image::make($photo)->resize(347,546)->save('public/slider/'.$photo_name);
    $data['photo']='public/slider/'.$photo_name;
    DB::table('sliders')->where('id',$id)->update($data);
    unlink($oldPhoto);
    $notification=array(
      'messege'=>'Successfully Photo update',
       'alert-type'=>'success'
         );
    return Redirect()->back()->with($notification);
   }
    $data['slider']=$oldSlider;
    $data['photo']=$oldPhoto;
    DB::table('sliders')->where('id',$id)->update($data);
    
    $notification=array(
    'messege'=>'Successfully Slider and Photo update',
    'alert-type'=>'success'
     );
    return Redirect()->back()->with($notification);
}
}