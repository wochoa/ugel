
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8"> <!-- Esta linea es importante -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>GOREHCO | Gobierno Regional Huánuco</title>

     <!-- Font Awesome Icons -->
 
  <!-- Font Awesome -->
  
  <!-- Ionicons -->
  {{-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> --}}
  <!-- DataTables -->
  {{-- <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}"> --}}



  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}">


  {{-- <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet"> --}}

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('img/logo-sm.png') }}">


<!-- CSS PROPIO -->
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/style.css') }}"> --}}
    <!-- Custom styles for this template -->
    {{-- <link href="{{ asset('dist/css/offcanvas.css') }}" rel="stylesheet"> --}}

<style type="text/css" media="screen">
      #cerca{
        width: 300px !important;
      }



    </style>

		 <!-- Global site tag (gtag.js) - Google Analytics -->
		{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139359440-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-139359440-1');
		</script> --}}


  </head>
  <body class="hold-transition">

    @yield('contenido')



<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('dist/js/offcanvas.js') }}"></script>



</body>
</html>
