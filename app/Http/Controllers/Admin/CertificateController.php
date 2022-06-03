<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use DB;
use App\Models\Certificate;
class CertificateController extends Controller
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
        $adminCertificate=DB::table('certificates')->get(); 
        return view('admin.certificate.index',compact('adminCertificate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $adminCertificate=DB::table('certificates')->get(); 
        return view('admin.certificate.create',compact('adminCertificate'));
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
        ]);


           $data=array();
           $data['title']=$request->title;

           
           $photo=$request->photo;
           
           if($photo){
            $photo_name=uniqid().'.'.$photo->getClientOriginalExtension();
            
            Image::make($photo)->resize(330,245)->save('public/certificate/'.$photo_name);
            
            $data['photo']='public/certificate/'.$photo_name;
            
            DB::table('certificates')->insert($data);
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
        $adminCertificate=DB::table('certificates')->where('id',$id)->first(); 
        return view('admin.certificate.edit',compact('adminCertificate'));
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
        ]);
           $data=array();
           $data['title']=$request->title;
           $update=DB::table('certificates')->where('id',$id)->update($data);
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
    public function updateCertificatePhoto(Request $request, $id){
       $data=array(); 
       $oldPhoto=$request->oldPhoto;
       
       $photo=$request->photo;
       if($photo){
        $photo_name=uniqid().'.'.$photo->getClientOriginalExtension();

        Image::make($photo)->resize(330,245)->save('public/certificate/'.$photo_name);
      
        $data['photo']='public/certificate/'.$photo_name;

        DB::table('certificates')->where('id',$id)->update($data);
        unlink($oldPhoto);
        
        $notification=array(
          'messege'=>'Successfully Photo update',
           'alert-type'=>'success'
             );
        return Redirect()->back()->with($notification);
       }
  
        $data['photo']=$oldPhoto;
        DB::table('certificates')->where('id',$id)->update($data);
        
        $notification=array(
        'messege'=>'Successfully Photo update',
        'alert-type'=>'success'
         );
        return Redirect()->back()->with($notification);
    }
    public function destroy($id)
    {
        $adminCertificate=DB::table("certificates")->where('id',$id)->first();
        unlink($adminCertificate->photo);
        DB::table("certificates")->where('id',$id)->delete();
        $notification=array(
          'messege'=>'Successfully Delete',
           'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
    }
}
