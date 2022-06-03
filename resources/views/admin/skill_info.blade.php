@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0 text-dark">Skill Info</h1>
         </div>
         <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
               <li class="breadcrumb-item active">Skill Info</li>
            </ol>
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container-fluid -->
</div>
<div class="card">
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <!-- left column -->
            <div class="col-md-6">
               <!-- general form elements -->
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Skill Info</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{route('update.skillinfo',$adminSkillInfo->id)}}"  method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="form-group">
                           <label >Title</label>
                           <input type="text"  class="form-control" value="{{$adminSkillInfo->title}}" name="title"  required="">
                        </div>
                        <div class="form-group">
                           <label >Video Link</label>
                           <textarea class="form-control"  name="video_link" >{{$adminSkillInfo->video_link}}</textarea>
                        </div>
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                  </form>
               </div>
               <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- left column -->
            <div class="col-md-6">
               <!-- general form elements -->
               <div class="card card-warning">
                  <div class="card-header">
                     <h3 class="card-title">Slider Photo</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form  method="POST" action="{{route('update.skillinfo.photo',$adminSkillInfo->id)}}"  method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="form-group ">
                           <label for="exampleInputFile">Banner</label>
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="exampleInputFile" name="banner" >
                                 <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="">Upload</span>
                              </div>
                           </div>
                        </div>
                        <div class="">
                           <label for="exampleInputFile">Old Banner</label><br>
                           <img src="{{URL::to($adminSkillInfo->banner)}}" style="height: 40px;width: 70px;">
                           <input type="hidden" name="oldBanner" value="{{$adminSkillInfo->banner}}" >
                        </div>
                        <div class="form-group ">
                           <label for="exampleInputFile">Video</label>
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="exampleInputFile" name="video" >
                                 <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="">Upload</span>
                              </div>
                           </div>
                        </div>
                        <div class="">
                           <label for="exampleInputFile">Old Video</label><br>
                           <img src="{{URL::to($adminSkillInfo->video)}}" style="height: 40px;width: 70px;">
                           <input type="hidden" name="oldVideo" value="{{$adminSkillInfo->video}}" >
                        </div>
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                        <button type="submit" class="btn btn-warning">Submit</button>
                     </div>
                  </form>
               </div>
               <!-- /.card -->
            </div>
            <!--/.col (left) -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </section>
</div>
@endsection