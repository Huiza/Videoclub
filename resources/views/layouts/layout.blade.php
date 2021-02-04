	<!DOCTYPE html>
<html>
<head>
	<title>Videoclub-@yield('title')</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <!---->
   <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
    ============================================ -->
       
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/wave/button.css') }}">
    <!-- font awesome CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
    <!-- meanmenu CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu/meanmenu.min.css') }}">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- summernote CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/summernote/summernote.css') }}">
    <!-- Range Slider CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/themesaller-forms.css') }}">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- Notika icon CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/notika-custom-icon.css') }}">
    <!-- bootstrap select CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select/bootstrap-select.css') }}">
    <!-- datapicker CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/datapicker/datepicker3.css') }}">
    <!-- Color Picker CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/color-picker/farbtastic.css') }}">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/chosen/chosen.css') }}">
    <!-- notification CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/notification/notification.css') }}">
    <!-- Data Table JS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
     <!-- Notika icon CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/notika-custom-icon.css') }}">
    <!-- dropzone CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/dropzone/dropzone.css') }}">
    <!-- wave CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/wave/waves.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/wave/button.css') }}">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    
    <!-- modernizr JS
        ============================================ -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
   <!---->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Logo</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Empresas
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/peliculas/crear">Nueva pelicula</a>
        <a class="dropdown-item" href="/peliculas/">Listado de pelicula</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>

     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Proyectos
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Nuevo proyecto</a>
        <a class="dropdown-item" href="#">Listado de proyectos</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
  </ul>
</nav>
@yield('content')
 <script src="{{asset('js/app.js')}}"></script> 
</body>