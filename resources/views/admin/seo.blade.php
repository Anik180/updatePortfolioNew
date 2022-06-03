@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0 text-dark">Seo</h1>
         </div>
         <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
               <li class="breadcrumb-item active">Seo</li>
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
                     <h3 class="card-title">Seo Info</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{route('update.seo',$adminSeo->id)}}" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="form-group">
                           <label >Meta Author</label>
                           <input type="text"  class="form-control" value="{{$adminSeo->meta_author}}" name="meta_author">
                        </div>
                        <div class="form-group">
                           <label >Meta Title</label>
                           <input type="text" class="form-control" value="{{$adminSeo->meta_title}}" name="meta_title">
                        </div>
                        <div class="form-group">
                           <label >Meta Keyword</label>
                           <input type="text" class="form-control" value="{{$adminSeo->meta_keyword}}" name="meta_keyword">
                        </div>
                        <div class="form-group">
                           <label >Meta Description</label>
                           <input type="text" class="form-control" value="{{$adminSeo->meta_description}}" name="meta_description">
                        </div>
                        <div class="form-group">
                           <label >Google Analytics</label>
                           <input type="text" class="form-control" value="{{$adminSeo->google_analytics}}" name="google_analytics">
                        </div>
                        <div class="form-group">
                           <label >Google Verification</label>
                           <input type="text" class="form-control" value="{{$adminSeo->google_verification}}" name="google_verification">
                        </div>
                        <div class="form-group">
                           <label >Alexa Analytics</label>
                           <input type="text" class="form-control" value="{{$adminSeo->alexa_analytics}}" name="alexa_analytics">
                        </div>
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
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
                  <form  method="POST" action="{{-- {{route('update.slider.photo',$adminSlider->id)}} --}}" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="form-group ">
                           <label for="exampleInputFile">File input</label>
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="exampleInputFile" name="slider" >
                                 <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="">Upload</span>
                              </div>
                           </div>
                        </div>
                        <div class="">
                           <label for="exampleInputFile">Old Slider</label><br>
                           <img src="{{-- {{URL::to($adminSlider->slider)}} --}}" style="height: 40px;width: 70px;">
                           <input type="hidden" name="oldSlider" value="{{-- {{$adminSlider->slider}} --}}" >
                        </div>
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                        <button type="submit" class="btn btn-warning">Update</button>
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