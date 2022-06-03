@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0 text-dark">About Me</h1>
         </div>
         <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
               <li class="breadcrumb-item active">About Me</li>
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
                     <h3 class="card-title">About Me Info</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form  method="POST" action="{{route('update.about',$adminAbout->id)}}"  method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                  <div class="form-group">
                    <label >About Title</label>
                      
                    <input type="text"  class="form-control" value="{{$adminAbout->about_title}}" name="about_title"  required="">
                  </div>
                  <div class="form-group">
                    <label >About Subtitle</label>
                  
                    <input type="text" class="form-control" value="{{$adminAbout->about_subTitle}}" name="about_subTitle"  required="">
                  </div>
                  <div class="form-group">
                    <label >Description</label>
                  
                    <textarea class="form-control" value="" name="description"  required="">{{$adminAbout->description}}</textarea>
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
                     <h3 class="card-title">About Me Photo</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{route('update.about.photo',$adminAbout->id)}}"  method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="form-group ">
                          <label for="exampleInputFile">File input</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile" name="photo" >
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="">Upload</span>
                            </div>
                          </div>
                        </div>
                        <div class="">
                          <label for="exampleInputFile">Old Photo</label><br>
                          <img src="{{URL::to($adminAbout->photo)}}" style="height: 40px;width: 70px;">
                          <input type="hidden" name="oldPhoto" value="{{$adminAbout->photo}}" >
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