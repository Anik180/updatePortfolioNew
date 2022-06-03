@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0 text-dark">Logo And Fav</h1>
         </div>
         <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
               <li class="breadcrumb-item active">Logo And Fav</li>
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
                     <h3 class="card-title">Site Title</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{route('update.title',$adminLogo->id)}}" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="form-group">
                           <label >Site Title</label>
                           <input type="text"  class="form-control" value="{{$adminLogo->title}}" name="title">
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
                     <h3 class="card-title">Logo And Fav</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form  method="POST" action="{{route('update.logo',$adminLogo->id)}}" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="form-group ">
                           <label for="exampleInputFile">Black Logo</label>
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="exampleInputFile" name="black_logo" >
                                 <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="">Upload</span>
                              </div>
                           </div>
                        </div>
                        <div class="">
                           <label for="exampleInputFile">Old Black Logo</label><br>
                           <img src="{{URL::to($adminLogo->black_logo)}}" style="height: 40px;width: 70px;">
                           <input type="hidden" name="oldBlackLogo" value="{{$adminLogo->black_logo}}" >
                        </div>
                        <div class="form-group ">
                           <label for="exampleInputFile">White Logo</label>
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="exampleInputFile" name="white_logo" >
                                 <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="">Upload</span>
                              </div>
                           </div>
                        </div>
                        <div class="">
                           <label for="exampleInputFile">Old White Logo</label><br>
                           <img src="{{URL::to($adminLogo->white_logo)}}" style="height: 40px;width: 70px;">
                           <input type="hidden" name="oldWhiteLogo" value="{{$adminLogo->white_logo}}" >
                        </div>
                        <div class="form-group ">
                           <label for="exampleInputFile">Fav Icon</label>
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="exampleInputFile" name="fav" >
                                 <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="">Upload</span>
                              </div>
                           </div>
                        </div>
                        <div class="">
                           <label for="exampleInputFile">Old Fav Icon</label><br>
                           <img src="{{URL::to($adminLogo->fav)}}" style="height: 40px;width: 70px;">
                           <input type="hidden" name="oldFavIcon" value="{{$adminLogo->fav}}" >
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