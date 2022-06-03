<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Portfolio</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{asset('public/admin/plugins/fontawesome-free/css/all.min.css')}}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
      <!-- Tempusdominus Bbootstrap 4 -->
      <link rel="stylesheet" href="{{asset('public/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
      <!-- iCheck -->
      <link rel="stylesheet" href="{{asset('public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
      <!-- JQVMap -->
      <link rel="stylesheet" href="{{asset('public/admin/plugins/jqvmap/jqvmap.min.css')}}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{asset('public/admin/dist/css/adminlte.min.css')}}">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="{{asset('public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="{{asset('public/admin/plugins/daterangepicker/daterangepicker.css')}}">
      <!-- summernote -->
      <link rel="stylesheet" href="{{asset('public/admin/plugins/summernote/summernote-bs4.css')}}">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <!-- DataTables -->
      <link rel="stylesheet" href="{{asset('public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
      <!-- sweetalert -->
      <link rel="stylesheet" href="{{ asset('public/admin/plugins/toaster/toastr.css')}}">
      <link rel="stylesheet" href="{{ asset('public/admin/plugins/bootstrap-sweetalert/dist/sweetalert.css')}}">
      <link rel="stylesheet" href="{{ asset('public/admin/plugins/summernote/summernote-bs4.css')}}">
   </head>
   @guest
   @else
   <!-- Navbar -->
   <div class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
         <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
               </li>
               <li class="nav-item d-none d-sm-inline-block">
                  <a href="index3.html" class="nav-link">Home</a>
               </li>
               <li class="nav-item d-none d-sm-inline-block">
                  <a href="#" class="nav-link">Contact</a>
               </li>
            </ul>
            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
               <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                     <button class="btn btn-navbar" type="submit">
                     <i class="fas fa-search"></i>
                     </button>
                  </div>
               </div>
            </form>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
               <!-- Messages Dropdown Menu -->
               <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-comments"></i>
                  <span class="badge badge-danger navbar-badge">3</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                           <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                           <div class="media-body">
                              <h3 class="dropdown-item-title">
                                 Brad Diesel
                                 <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                              </h3>
                              <p class="text-sm">Call me whenever you can...</p>
                              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                           </div>
                        </div>
                        <!-- Message End -->
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                           <img src="{{asset('public/admin/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                           <div class="media-body">
                              <h3 class="dropdown-item-title">
                                 John Pierce
                                 <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                              </h3>
                              <p class="text-sm">I got your message bro</p>
                              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                           </div>
                        </div>
                        <!-- Message End -->
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                           <img src="{{asset('public/admin/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                           <div class="media-body">
                              <h3 class="dropdown-item-title">
                                 Nora Silvester
                                 <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                              </h3>
                              <p class="text-sm">The subject goes here</p>
                              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                           </div>
                        </div>
                        <!-- Message End -->
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                  </div>
               </li>
               <!-- Notifications Dropdown Menu -->
               <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="fas fa-cog"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     <div class="dropdown-divider"></div>
                     <a href="{{route('cv.upload')}}" class="dropdown-item">
                     <i class="fas fa-cloud-upload-alt mr-2"></i> Upload Cv
                     </a>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.logout')}}" role="button">
                  <i class="fas fa-power-off"></i>
                  </a>
               </li>
            </ul>
         </nav>
         <!-- /.navbar -->
         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{route('home')}}" class="brand-link">
            <img src="{{asset('public/admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8">
            <span class="brand-text font-weight-light">My Portfolio</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
               <!-- Sidebar user panel (optional) -->
               <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                     <img src="{{asset('public/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                     <a href="#" class="d-block">{{Auth::user()->name}}</a>
                  </div>
               </div>
               <!-- Sidebar Menu -->
               <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                  <li class="nav-item has-treeview menu-open">
                     <a href="{{route('home')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                           Dashboard
                        </p>
                     </a>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                           Home
                           <i class="fas fa-angle-left right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="{{route('admin.slider')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Slider</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="" class="nav-link">
                        <i class="nav-icon fas fa-dungeon"></i>
                        <p>
                           About
                           <i class="fas fa-angle-left right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="{{route('admin.about')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>About Me</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="" class="nav-link">
                        <i class="nav-icon fab fa-usps"></i>
                        <p>
                           Skills
                           <i class="fas fa-angle-left right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="{{URL::to('skill')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>All Skill</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{URL::to('skill/create')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Add Skill</p>
                           </a>
                        </li>
                         <li class="nav-item">
                           <a href="{{route('admin.skillinfo')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Skill Info</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="" class="nav-link">
                        <i class="nav-icon fab fa-usps"></i>
                        <p>
                           Project Gallery
                           <i class="fas fa-angle-left right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="{{URL::to('category')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>All Category</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{URL::to('category/create')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Add Category</p>
                           </a>
                        </li>
                         <li class="nav-item">
                           <a href="{{route('admin.project')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>All Project</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{route('admin.project.create')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Add Project</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="" class="nav-link">
                        <i class="nav-icon fab fa-usps"></i>
                        <p>
                           Certificate
                           <i class="fas fa-angle-left right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="{{URL::to('certificate')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>All Certificate</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{URL::to('certificate/create')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Add Certificate</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="" class="nav-link">
                        <i class="nav-icon fab fa-usps"></i>
                        <p>
                           Blog
                           <i class="fas fa-angle-left right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="{{URL::to('blog')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>All Blog</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{URL::to('blog/create')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Add Blog</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="" class="nav-link">
                        <i class="fas fa-cog"></i>
                        <p>
                           Config
                           <i class="fas fa-angle-left right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="{{route('admin.config')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Contact</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{route('admin.logo')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Logo & Fav</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="{{route('seo.upload')}}" class="nav-link">
                        <i class="fas fa-cog"></i>
                        <p>
                           SEO
                        </p>
                     </a>
                  </li>
               </nav>
               <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
         </aside>
      </div>
   </div>
   @endguest
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      @yield('content')
   </div>
   <!-- /.content-wrapper -->
   <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
   </aside>
   <!-- /.control-sidebar -->
   </div>
   <!-- ./wrapper -->
   <!-- jQuery -->
   <script src="{{asset('public/admin/plugins/jquery/jquery.min.js')}}"></script>
   <!-- jQuery UI 1.11.4 -->
   <script src="{{asset('public/admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
   <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
   <script>
      $.widget.bridge('uibutton', $.ui.button)
   </script>
   <!-- Bootstrap 4 -->
   <script src="{{asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   <!-- ChartJS -->
   <script src="{{asset('public/admin/plugins/chart.js/Chart.min.js')}}"></script>
   <!-- Sparkline -->
   <script src="{{asset('public/admin/plugins/sparklines/sparkline.js')}}"></script>
   <!-- JQVMap -->
   <script src="{{asset('public/admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
   <script src="{{asset('public/admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
   <!-- jQuery Knob Chart -->
   <script src="{{asset('public/admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
   <!-- daterangepicker -->
   <script src="{{asset('public/admin/plugins/moment/moment.min.js')}}"></script>
   <script src="{{asset('public/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
   <!-- Tempusdominus Bootstrap 4 -->
   <script src="{{asset('public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
   <!-- Summernote -->
   <script src="{{asset('public/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
   <!-- overlayScrollbars -->
   <script src="{{asset('public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
   <!-- AdminLTE App -->
   <script src="{{asset('public/admin/dist/js/adminlte.js')}}"></script>
   <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
   <script src="{{asset('public/admin/dist/js/pages/dashboard.js')}}"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="{{asset('public/admin/dist/js/demo.js')}}"></script>
   <!-- datatable -->
   <script src="{{asset('public/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
   <script src="{{asset('public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
   <script src="{{asset('public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
   <!-- <script src="{{asset('public/backend/dist/js/adminlte.min.js')}}"></script> -->
   <!---alertjs file-->
   <script  src="{{ asset('public/admin/plugins/toaster/toastr.min.js')}}"></script>
   <script  src="{{ asset('public/admin/plugins/bootstrap-sweetalert/dist/sweetalert.min.js')}}"></script>
   <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true,
          "autoWidth": false,
        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
   </script>
   <script>
      @if(Session::has('messege'))
           var type="{{Session::get('alert-type','info')}}"
           switch(type){
               case 'info':
                    toastr.info("{{ Session::get('messege') }}");
                    break;
               case 'success':
                   toastr.success("{{ Session::get('messege') }}");
                   break;
               case 'warning':
                  toastr.warning("{{ Session::get('messege') }}");
                   break;
               case 'error':
                   toastr.error("{{ Session::get('messege') }}");
                   break;
           }
         @endif
   </script>
   <script>
      $(document).on("click", "#delete", function(e){
          e.preventDefault();
           var link = $(this).attr("href");
           swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
          },
          function(isConfirm) {
            if (isConfirm) {
              swal("Deleted!", "Your imaginary file has been deleted.", "success");
              window.location.href = link;
            } else {
              swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
          });
         });
   </script>
   <script src="{{asset('public/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
   <script>
      $(function () {
        // Summernote
        $('.textarea').summernote()
      })
   </script>
   </body>
</html>