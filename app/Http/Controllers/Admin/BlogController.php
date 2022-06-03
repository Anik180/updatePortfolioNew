<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
use App\Models\Blog;
class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminBolg=DB::table('blogs')->get(); 
        return view('admin.blog.index',compact('adminBolg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $adminBolg=DB::table('blogs')->get(); 
        return view('admin.blog.create',compact('adminBolg'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'title' => 'required',
        'date' => 'required',
        'description' => 'required',
        ]);

       $data=array();
       $data['title']=$request->title;
       $data['date']=$request->date;
       $data['description']=$request->description;

       
       $photo=$request->photo;
       
       if($photo){
        $photo_name=uniqid().'.'.$photo->getClientOriginalExtension();
        
        Image::make($photo)->resize(330,245)->save('public/blog/'.$photo_name);
        
        $data['photo']='public/blog/'.$photo_name;
        
        DB::table('blogs')->insert($data);
         $notification=array(
          'messege'=>'Successfully Save',
           'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
           }else{
            return Redirect()->back();
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adminBolg=DB::table('blogs')->where('id',$id)->first(); 
        return view('admin.blog.edit',compact('adminBolg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
        'title' => 'required',
        'date' => 'required',
        'description' => 'required',
        ]);
           $data=array();
           $data['title']=$request->title;
           $data['date']=$request->date;
           $data['description']=$request->description;
           $update=DB::table('blogs')->where('id',$id)->update($data);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updateBlogPhoto(Request $request, $id){
       $data=array(); 
       $oldPhoto=$request->oldPhoto;
       
       $photo=$request->photo;
       if($photo){
        $photo_name=uniqid().'.'.$photo->getClientOriginalExtension();

        Image::make($photo)->resize(330,245)->save('public/blog/'.$photo_name);
      
        $data['photo']='public/blog/'.$photo_name;

        DB::table('blogs')->where('id',$id)->update($data);
        unlink($oldPhoto);
        
        $notification=array(
          'messege'=>'Successfully Photo update',
           'alert-type'=>'success'
             );
        return Redirect()->back()->with($notification);
       }
  
        $data['photo']=$oldPhoto;
        DB::table('blogs')->where('id',$id)->update($data);
        
        $notification=array(
        'messege'=>'Successfully Photo update',
        'alert-type'=>'success'
         );
        return Redirect()->back()->with($notification);
    }
    public function destroy($id)
    {
        $adminBlog=DB::table("blogs")->where('id',$id)->first();
        unlink($adminBlog->photo);
        DB::table("blogs")->where('id',$id)->delete();
        $notification=array(
        'messege'=>'Successfully Delete',
         'alert-type'=>'success'
           );
        return Redirect()->back()->with($notification);
    }
}
