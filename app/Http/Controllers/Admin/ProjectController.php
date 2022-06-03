<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use DB;
use App\Models\Project;
class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminProject(){
      $adminProject=DB::table('projects')
                   ->join('categories','projects.category_id','categories.id')
                   ->select('categories.category_name','projects.*')
                   ->get();	
      return view('admin.project.index',compact('adminProject'));
    }

    public function adminProjectCreate(){
    	$adminCategory=DB::table('categories')->get();	
        return view('admin.project.create',compact('adminCategory'));
    }

    public function adminProjectStore(Request $request){
        $validatedData = $request->validate([
        'category_id' => 'required',
        'project_name' => 'required',
        ]);


           $data=array();
           $data['category_id']=$request->category_id;
           $data['project_name']=$request->project_name;
           $data['website_link']=$request->website_link;
           $data['github_link']=$request->github_link;
           
           $thumb=$request->thumb;
           $photo=$request->photo;
           
           if($thumb && $photo){
            $thumb_name=uniqid().'.'.$thumb->getClientOriginalExtension();
            $photo_name=uniqid().'.'.$photo->getClientOriginalExtension();
            
            Image::make($thumb)->resize(370,300)->save('public/project/'.$thumb_name);
            Image::make($photo)->resize(370,300)->save('public/project/'.$photo_name);
            
            $data['thumb']='public/project/'.$thumb_name;
            $data['photo']='public/project/'.$photo_name;
            
            DB::table('projects')->insert($data);
	         $notification=array(
	          'messege'=>'Successfully Save',
	           'alert-type'=>'success'
	             );
	            return Redirect()->back()->with($notification);
	           }else{
	            return Redirect()->back();
	           }
    }

    public function projectEdit($id){
	 $adminProject=DB::table("projects")->where('id',$id)->first();
	 $category=DB::table('categories')->get();
	 return view('admin.project.edit',compact('adminProject','category'));
    }

    public function updateProject(Request $request ,$id){
        $validatedData = $request->validate([
        'category_id' => 'required',
        'project_name' => 'required',
        ]);
           $data=array();
           $data['category_id']=$request->category_id;
           $data['project_name']=$request->project_name;
           $data['website_link']=$request->website_link;
           $data['github_link']=$request->github_link;
           $update=DB::table('projects')->where('id',$id)->update($data);
            if($update){
               $notification=array(
                            'messege'=>'Successfully Update ',
                            'alert-type'=>'success'
                            );
               return Redirect()->route('admin.project')->with($notification);
            }else{
               $notification=array(
                            'messege'=>'Sorry',
                            'alert-type'=>'error'
                            );
               return Redirect()->back()->with($notification);
            }
    }

    public function updateProjectPhoto(Request $request,$id){
	   
	   $data=array(); 
	   $oldThumb=$request->oldThumb;
	   $oldPhoto=$request->oldPhoto;
	   

	   $thumb=$request->thumb;
	   $photo=$request->photo;
	   if($thumb && $photo){
	    $thumb_name=uniqid().'.'.$thumb->getClientOriginalExtension();
	    $photo_name=uniqid().'.'.$photo->getClientOriginalExtension();

	    
	    Image::make($thumb)->resize(370,300)->save('public/project/'.$thumb_name);
	    Image::make($photo)->resize(370,300)->save('public/project/'.$photo_name);
	  
	    $data['thumb']='public/project/'.$thumb_name;
	    $data['photo']='public/project/'.$photo_name;

	    DB::table('projects')->where('id',$id)->update($data);
	    unlink($oldThumb);
	    unlink($oldPhoto);
	    
	    $notification=array(
	      'messege'=>'Successfully Thumb and Photo update',
	       'alert-type'=>'success'
	         );
	    return Redirect()->back()->with($notification);
	   }
	   if($thumb){
	    $thumb_name=uniqid().'.'.$thumb->getClientOriginalExtension();
	    Image::make($thumb)->resize(370,300)->save('public/project/'.$thumb_name);
	    $data['thumb']='public/project/'.$thumb_name;
	    DB::table('projects')->where('id',$id)->update($data);
	    unlink($oldThumb);
	    $notification=array(
	      'messege'=>'Successfully Thumb update',
	       'alert-type'=>'success'
	         );
	    return Redirect()->back()->with($notification);
	   }
	   if($photo){
	    $photo_name=uniqid().'.'.$photo->getClientOriginalExtension();
	    Image::make($photo)->resize(370,300)->save('public/project/'.$photo_name);
	    $data['photo']='public/project/'.$photo_name;
	    DB::table('projects')->where('id',$id)->update($data);
	    unlink($oldPhoto);
	    $notification=array(
	      'messege'=>'Successfully Photo update',
	       'alert-type'=>'success'
	         );
	    return Redirect()->back()->with($notification);
	   }
	    $data['thumb']=$oldThumb;
	    $data['photo']=$oldPhoto;
	    DB::table('projects')->where('id',$id)->update($data);
	    
	    $notification=array(
	    'messege'=>'Successfully thumb and Photo update',
	    'alert-type'=>'success'
	     );
	    return Redirect()->back()->with($notification);
}

    public function projectDestroy($id)
    {
	    $project=DB::table("projects")->where('id',$id)->first();
	    unlink($project->thumb);
	    unlink($project->photo);
	    DB::table("projects")->where('id',$id)->delete();
        $notification=array(
          'messege'=>'Successfully Delete',
           'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
        
    }


}
