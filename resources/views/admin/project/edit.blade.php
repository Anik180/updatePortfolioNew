@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0 text-dark">Project</h1>
         </div>
         <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
               <li class="breadcrumb-item active">Project</li>
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
                     <h3 class="card-title">Project Info</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{route('update.project',$adminProject->id)}}"  method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="form-group" data-select2-id="53">
                           <label>Category Name</label>
                           <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="category_id">
                              <option selected="selected" >Select Category</option>
                              @foreach($category as $row)
                              <option value="{{$row->id}}" <?php if($row->id==$adminProject->category_id){echo "Selected";}?> >{{ $row->category_name }}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="form-group">
                           <label >Project Name</label>
                           <input type="text" class="form-control" value="{{$adminProject->project_name}}" name="project_name"  required="">
                        </div>
                        <div class="form-group">
                           <label >Website Link</label>
                           <input type="text" class="form-control" value="{{$adminProject->website_link}}" name="website_link">
                        </div>
                        <div class="form-group">
                           <label >Github Link</label>
                           <input type="text" class="form-control" value="{{$adminProject->github_link}}" name="github_link">
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
                  <form  method="POST" action="{{route('update.project.photo',$adminProject->id)}}"  method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="form-group ">
                           <label for="exampleInputFile">Thumb</label>
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="exampleInputFile" name="thumb" >
                                 <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="">Upload</span>
                              </div>
                           </div>
                        </div>
                        <div class="">
                           <label for="exampleInputFile">Old Thumb</label><br>
                           <img src="{{URL::to($adminProject->thumb)}}" style="height: 40px;width: 70px;">
                           <input type="hidden" name="oldThumb" value="{{$adminProject->thumb}}" >
                        </div>
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
                           <img src="{{URL::to($adminProject->photo)}}" style="height: 40px;width: 70px;">
                           <input type="hidden" name="oldPhoto" value="{{$adminProject->photo}}" >
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