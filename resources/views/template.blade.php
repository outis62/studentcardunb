<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CARTE ETUDIANT</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/appli.css')}}">
  <link href="{{asset('assets/vendor/DataTables/DataTables-1.10.20/css/jquery.dataTables.min.css')}}" rel="stylesheet"/>
 
 
</head>

<body class="hold-transition sidebar-mini">
  
<div  class="wrapper " >

  <header class="main-header">
    <!-- Logo -->
    <a  class="logo">
      <span class="logo-lg"><b>MENU</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only"></span>
      </a>
      <div class="titre_appli"><span>student</span>CARD</div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="les-item sidebar-menu" >
            <li class="treeview">
                <a class="item-du-menu" href="{{url('home')}}">
                    <i class="fa fa-home"></i> <span   >AccueilL</span>
                </a> 
            </li>
            <li class="treeview">
                <a class="item-du-menu" href="{{url('nouveau-enregistrement')}}">
                    <i class="fa fa-pencil"></i> <span  ">Etudiant</span>
                </a> 
            </li>
            <li class="treeview">
                <a class="item-du-menu" href="{{url('etudiant')}}">
                    <i class="fa fa-book"></i> <span   ">Liste</span>
                </a> 
            </li>
          <li class="treeview">
                <a class="item-du-menu"  href="{{url('carte')}}">
                        <i class="fa fa-photo"></i> <span   >Carte</span>
                </a>
          </li>

          <li class="treeview">
                <a class="item-du-menu"  href="{{url('nouveau-filiere')}}">
                        <i class="fa fa-pencil"></i> <span  >Particularite</span>
                </a>
          </li>

          <li class="treeview">
          
          <a class="dropdown-item  item-du-menu" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out "></i>{{ __('Deconnection') }}
       </a>
       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="arriere-plan">

  @yield('contenu')
</div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer pied-de-page">
    <strong>Copyright &copy; 2023 Bobo Dioulasso.</strong>
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>


 <!-- Bootstrap core JavaScript -->
 <!-- <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script> -->
  <script src="{{asset('assets/vendor/DataTables/jQuery-3.3.1/jquery-3.3.1.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>

  <!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>$(document).ready(function () {
    // $.noConflict();
    $('#etudiant').DataTable();
});
</script>
</body>
</html>