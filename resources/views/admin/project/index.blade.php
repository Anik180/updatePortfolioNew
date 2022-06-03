@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0 text-dark">All Project</h1>
         </div>
         <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
               <li class="breadcrumb-item active">All Project</li>
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
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">All Project</h3>
                     <a href="{{route('admin.project.create')}}"class="btn btn-sm btn-success" style="float: right;">Add New</a>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Category Name</th>
                              <th>Project Name</th>
                              <th>Website Link</th>
                              <th>Github Link</th>
                              <th>Thumb</th>
                              <th>Photo</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($adminProject as $row)
                           <tr>
                              <td>{{ $row->category_name}}</td>
                              <td>{{ $row->project_name}}</td>
                              <td>{{ $row->website_link}}</td>
                              <td>{{ $row->github_link}}</td>
                              <td><img src="{{URL::to($row->thumb)}}" style="height: 40px;width: 70px;"></td>
                              <td><img src="{{URL::to($row->photo)}}" style="height: 40px;width: 70px;"></td>
                              <td>
                                 &nbsp;&nbsp;
                                 <a href="{{ route('project.edit',$row->id) }}" class="btn btn-sm btn-info">edit</a>
                                 <div style="float: left;">
                                    <form action="{{ route('project.destroy',$row->id) }}" method="post">
                                       {{ method_field('delete') }}
                                       @csrf
                                       <button class="btn btn-sm btn-danger" type="submit" >Delete</button>
                                    </form>
                                 </div>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                        <tfoot>
                           <tr>
                              <th>Category Name</th>
                              <th>Project Name</th>
                              <th>Website Link</th>
                              <th>Github Link</th>
                              <th>Thumb</th>
                              <th>Photo</th>
                              <th>Action</th>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
                  <!-- /.card-body -->
               </div>
               <!-- /.card -->
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </section>
</div>
@endsection