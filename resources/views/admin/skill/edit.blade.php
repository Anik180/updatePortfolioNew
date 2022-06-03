@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Skill</h1>
         </div>
         <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
               <li class="breadcrumb-item active">Update Skill</li>
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
                     <h3 class="card-title">Update Skill</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form  method="POST" action="{{ URL::to('skill/'.$skill->id) }}">
                        @csrf
                        @method('PUT')
                     <div class="card-body">
                  <div class="form-group">
                    <div class="row">
                    <div class="col-md-6"> 
                    <label >Skill Title</label>
                      
                    <input type="text"  class="form-control" value="{{ $skill->skill_title}}" name="skill_title"  required="">
                    </div>
                    <div class="col-md-5"> 
                    <label >Skill Percent</label>
                  
                    <input type="text" class="form-control" value="{{ $skill->skill_percent}}" name="skill_percent"  required="">
                  </div>
                  <span style="margin-top: 40px;"><b>%</b></span>
                  </div>
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
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </section>
</div>
@endsection