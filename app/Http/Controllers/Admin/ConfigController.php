<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Contact;
use App\Models\Logo;
use Image;
class ConfigController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminConfig(){
      $adminConfig=DB::table('contacts')->first();	
      return view('admin.config',compact('adminConfig'));
    }

    public function updateConfig(Request $request,$id){
    	   $data=array();
           $data['phone']=$request->phone;
           $data['mail']=$request->mail;
           $data['address']=$request->address;
           $data['facebook_link']=$request->facebook_link;
           $data['github_link']=$request->github_link;
           $data['twitter_link']=$request->twitter_link;
           $data['instagram_link']=$request->instagram_link;
           $data['linkdin_link']=$request->linkdin_link;
           $data['google_map']=$request->google_map;
           $update=DB::table('contacts')->where('id',$id)->update($data);
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

    public function adminLogo(){
      $adminLogo=DB::table('logos')->first();  
      return view('admin.logo_fav',compact('adminLogo'));
    }

  public function updateTitle(Request $request,$id){
     $data=array();
     $data['title']=$request->title;
     $update=DB::table('logos')->where('id',$id)->update($data);
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

  public function updateLogo(Request $request,$id){
   
   $data=array(); 
   $oldBlackLogo=$request->oldBlackLogo;
   $oldWhiteLogo=$request->oldWhiteLogo;
   $oldFavIcon=$request->oldFavIcon;
   

   $blackLogo=$request->black_logo;
   $whiteLogo=$request->white_logo;
   $fav=$request->fav;
   if($blackLogo && $whiteLogo && $fav){
    $blackLogo_name=uniqid().'.'.$blackLogo->getClientOriginalExtension();
    $whiteLogo_name=uniqid().'.'.$whiteLogo->getClientOriginalExtension();
    $fav_name=uniqid().'.'.$fav->getClientOriginalExtension();

    
    Image::make($blackLogo)->resize(1002,1026)->save('public/logo/'.$blackLogo_name);
    Image::make($whiteLogo)->resize(1002,1026)->save('public/logo/'.$whiteLogo_name);
    Image::make($fav)->resize(29,22)->save('public/logo/'.$fav_name);
  
    $data['black_logo']='public/logo/'.$blackLogo_name;
    $data['white_logo']='public/logo/'.$whiteLogo_name;
    $data['fav']='public/logo/'.$fav_name;

    DB::table('logos')->where('id',$id)->update($data);
    unlink($oldBlackLogo);
    unlink($oldWhiteLogo);
    unlink($oldFavIcon);
    $notification=array(
      'messege'=>'Successfully Logo and Fav update',
       'alert-type'=>'success'
         );
    return Redirect()->back()->with($notification);
   }
   if($blackLogo){
    $blackLogo_name=uniqid().'.'.$blackLogo->getClientOriginalExtension();
    Image::make($blackLogo)->resize(1002,1026)->save('public/logo/'.$blackLogo_name);
    $data['black_logo']='public/logo/'.$blackLogo_name;
    DB::table('logos')->where('id',$id)->update($data);
    unlink($oldBlackLogo);
    $notification=array(
      'messege'=>'Successfully Black Logo update',
       'alert-type'=>'success'
         );
    return Redirect()->back()->with($notification);
   }
   if($whiteLogo){
    $whiteLogo_name=uniqid().'.'.$whiteLogo->getClientOriginalExtension();
    Image::make($whiteLogo)->resize(1002,1026)->save('public/logo/'.$whiteLogo_name);
    $data['white_logo']='public/logo/'.$whiteLogo_name;
    DB::table('logos')->where('id',$id)->update($data);
    unlink($oldWhiteLogo);
    $notification=array(
      'messege'=>'Successfully White Logo update',
       'alert-type'=>'success'
         );
    return Redirect()->back()->with($notification);
   }
   if($fav){
    $fav_name=uniqid().'.'.$fav->getClientOriginalExtension();
    Image::make($fav)->resize(29,22)->save('public/logo/'.$fav_name);
    $data['fav']='public/logo/'.$fav_name;
    DB::table('logos')->where('id',$id)->update($data);
    unlink($oldFavIcon);
    $notification=array(
      'messege'=>'Successfully Fav Icon update',
       'alert-type'=>'success'
         );
    return Redirect()->back()->with($notification);
   }
    $data['black_logo']=$oldBlackLogo;
    $data['white_logo']=$oldWhiteLogo;
    $data['fav']=$oldFavIcon;
    DB::table('logos')->where('id',$id)->update($data);
    
    $notification=array(
    'messege'=>'Successfully Logo and Fav update',
    'alert-type'=>'success'
     );
    return Redirect()->back()->with($notification);
}

}
