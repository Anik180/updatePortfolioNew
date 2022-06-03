<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Skill;
class SkillController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Displasy a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skill = Skill::all();
        return view('admin.skill.index',compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skill=DB::table('skills')->get();
        return view('admin.skill.create',compact('skill'));
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
        'skill_title' => 'required',
        'skill_percent' => 'required',
        ]);

        $skill = New Skill();
        $skill->skill_title = $request->skill_title;
        $skill->skill_percent = $request->skill_percent;

        $skill->save();

        $notification=array(
          'messege'=>'Successfully  Save',
           'alert-type'=>'success'
             );
   return Redirect()->route('skill.index')->with($notification);
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
      $skill=DB::table("skills")->where('id',$id)->first();
      return view('admin.skill.edit',compact('skill'));
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
         $data=array();
         $data['skill_title']=$request->skill_title;
         $data['skill_percent']=$request->skill_percent;
         DB::table('skills')->where('id',$id)->update($data);
         $notification=array(
          'messege'=>'Successfully Updated',
          'alert-type'=>'success'
             );
        return Redirect()->route('skill.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('skills')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Successfully delete',
            'alert-type'=>'success'
             );
        return Redirect()->back()->with($notification);
        
    }
}
