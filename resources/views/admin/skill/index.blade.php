@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0 text-dark">All Skill</h1>
         </div>
         <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
               <li class="breadcrumb-item active">All Skill</li>
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
                     <h3 class="card-title">All Skill</h3>
                     <a href="{{URL::to('skill/create')}}"class="btn btn-sm btn-success" style="float: right;">Add New</a>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Skill Title</th>
                              <th>Skill Percent</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($skill as $row)
                           <tr>
                              <td>{{ $row->skill_title}}</td>
                              <td>{{ $row->skill_percent}}%</td>
                              <td>
                                 &nbsp;&nbsp;
                                 <a href="{{ route('skill.edit',$row->id) }}" class="btn btn-sm btn-info">edit</a>
                                 <div style="float: left;">
                                    <form action="{{ route('skill.destroy',$row->id) }}" method="post">
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
                              <th>Skill Title</th>
                              <th>Skill Percent</th>
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