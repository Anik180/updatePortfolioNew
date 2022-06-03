@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0 text-dark">Certificate</h1>
         </div>
         <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
               <li class="breadcrumb-item active">Certificate</li>
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
                     <h3 class="card-title">Certificate Info</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{ URL::to('certificate/'.$adminCertificate->id) }}" enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                     <div class="card-body">
                        <div class="form-group">
                           <label >Certificate Title</label>
                           <input type="text" class="form-control" value="{{$adminCertificate->title}}" name="title"  required="">
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
                     <h3 class="card-title">Certificate Photo</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form  method="POST" action="{{route('update.certificate.photo',$adminCertificate->id)}}" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="form-group ">
                           <label for="exampleInputFile">Photo</label>
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
                           <img src="{{URL::to($adminCertificate->photo)}}" style="height: 40px;width: 70px;">
                           <input type="hidden" name="oldPhoto" value="{{$adminCertificate->photo}}" >
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