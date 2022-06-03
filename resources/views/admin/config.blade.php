@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0 text-dark">Configaration</h1>
         </div>
         <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
               <li class="breadcrumb-item active">Configaration</li>
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
            <div class="col-md-12">
               <!-- general form elements -->
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Configaration Info</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{route('update.config',$adminConfig->id)}}">
                     @csrf
                     <div class="card-body">
                        <div class="form-group">
                           <label >Phone</label>
                           <input type="text"  class="form-control" value="{{$adminConfig->phone}}" name="phone">
                        </div>
                        <div class="form-group">
                           <label >Email Address</label>
                           <input type="text" class="form-control" value="{{$adminConfig->mail}}" name="mail">
                        </div>
                        <div class="form-group">
                           <label >Address</label>
                           <textarea class="form-control" name="address">{{$adminConfig->address}}</textarea>
                        </div>
                        <div class="form-group">
                           <label >Facebook Link</label>
                           <input type="text" class="form-control" value="{{$adminConfig->facebook_link}}" name="facebook_link">
                        </div>
                        <div class="form-group">
                           <label >Github Link</label>
                           <input type="text" class="form-control" value="{{$adminConfig->github_link}}" name="github_link">
                        </div>
                        <div class="form-group">
                           <label >Twitter Link</label>
                           <input type="text" class="form-control" value="{{$adminConfig->twitter_link}}" name="twitter_link">
                        </div>
                        <div class="form-group">
                           <label >Instagram Link</label>
                           <input type="text" class="form-control" value="{{$adminConfig->instagram_link}}" name="instagram_link" >
                        </div>
                        <div class="form-group">
                           <label >Linkdin Link</label>
                           <input type="text" class="form-control" value="{{$adminConfig->linkdin_link}}" name="linkdin_link">
                        </div>
                        <div class="form-group">
                           <label >Google Map</label>
                           <textarea class="form-control" name="google_map">{{$adminConfig->google_map}}</textarea>
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
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </section>
</div>
@endsection