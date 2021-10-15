@php

$urltema=route('tema');
$tematm = json_decode(getRemoteFile($urltema), true);
$dnsserver=$tematm["dnsserver"];
//session()->put('dnsserver', $dnsserver);
@endphp
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8"> <!-- Esta linea es importante -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gobierno Regional Huanuco,gorehco,Gore hco, Gobierno regional Huánuco, Region huanuco, Región Huánuco">
    <meta name="author" content="desarrollado por Sub Gerencia de Desarrollo institucional y sistemas">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>{{ $tematm["nombredireccionweb"] }} | Gorehco</title>

     <!-- Font Awesome Icons -->
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

<!--<link rel="stylesheet" href="{{ asset('dist/css/mdb.min.css') }}">-->

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}">

 <!-- <link rel="stylesheet" href="{{ asset('dist/css/mdb.min.css') }}">-->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ $dnsserver }}/storage/{{substr($tematm["favicons"],7) }}">


<!-- CSS PROPIO -->
<link rel="stylesheet" type="text/css" href="{{ asset('dist/css/style.css') }}">
    <!-- Custom styles for this template -->
    <link href="{{ asset('dist/css/offcanvas.css') }}" rel="stylesheet">

<style type="text/css" media="screen">
      #cerca{
        width: 300px !important;
      }



    </style>

		 <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139359440-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-139359440-1');
		</script>


  </head>
  <body class="hold-transition layout-top-nav layout-navbar-fixed dark-mode">
  <div class="wrapper">
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color:{{ $tematm["tmcolor_tema"]}}; color:#fff;">
    	   <div class="container">
    	  	  <a class="navbar-brand mr-auto mr-lg-0" href="/"><img src="{{ $tematm["dnsserver"] }}/storage/{{substr($tematm["tmlogo_tema"],7) }}" height="40" /></a>
      		  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
      		    <span class="navbar-toggler-icon"></span>
      		  </button>

      		  <div class="navbar-collapse offcanvas-collapse " id="navbarsExampleDefault">
      		    <ul class="navbar-nav ml-auto">
                @php
                    $url=route('listamenus');
                   $menus = json_decode(getRemoteFile($url), true);
                   //$menus = json_decode($menus);

                   $url2=route("listasubmenu");
                    $submenu = json_decode(getRemoteFile($url2), true);

                    $j=0;
                    //print_r($menus);
                    //echo $menus[0]["nom_menu"];
                    
                @endphp

                @for($i = 0; $i < count($menus); $i++)

                    @if($menus[$i]["link_menu"]=="#")
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $menus[$i]["nom_menu"] }}</span></a>
                          <div class="dropdown-menu" aria-labelledby="dropdown01">

                            @for($p = 0; $p < count($submenu); $p++)
                                @if($submenu[$p]["idmenus"]==$menus[$i]["idmenus"])

                                    @if($submenu[$p]["idpagina"]!='')
                                    <a class="dropdown-item" href="/pagina/{{ $submenu[$p]["idpagina"]}}" target="_blank">{{ $submenu[$p]["nom_submenu"]}}</a>
                                    @else
                                    <a class="dropdown-item" href="{{ $submenu[$p]["link_submenu"]}}" target="_blank">{{ $submenu[$p]["nom_submenu"]}}</a>
                                    @endif

                                @endif 
                            @endfor
                          
                            
                          </div>
                        </li> 
                        @else

                        @if($menus[$i]["link_menu"]!='')
                        <li class="nav-item">
                          <a class="nav-link" href="{{ $menus[$i]["link_menu"] }}">{{ $menus[$i]["nom_menu"] }}</a>		        
                        </li>
                        @else
                        <li class="nav-item">
                          <a class="nav-link" href="/pagina/{{ $menus[$i]["id_pagina"]}}" target="_blank"">{{ $menus[$i]["nom_menu"]  }}</a>		        
                        </li>
                        @endif
                    
                      @endif
                    
                @endfor


                {{-- @php
                
                    @$menus=Session('menus');
                    
                    $submenu=Session('submenu');
                    $j=0;
                    
                    
                @endphp
                  
                    @foreach($menus as $mn)
                        @php
                        $j++;
                        @endphp                
                      @if($mn->link_menu=="#")
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $mn->nom_menu }}</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                          @foreach($submenu as $subm)
                            @if($subm->idmenus==$mn->idmenus)

                                @if($subm->idpagina!='')
                                <a class="dropdown-item" href="/pagina/{{ $subm->idpagina}}" target="_blank">{{ utf8_encode($subm->nom_submenu)}}</a>
                                @else
                                <a class="dropdown-item" href="{{ $subm->link_submenu}}" target="_blank">{{ utf8_encode($subm->nom_submenu)}}</a>
                                @endif

                            @endif
                          @endforeach
                          
                        </div>
                      </li>

                      @else

                          @if($mn->link_menu!='')
                          <li class="nav-item">
                            <a class="nav-link" href="{{ $mn->link_menu }}">{{ $mn->nom_menu }}</a>		        
                          </li>
                          @else
                          <li class="nav-item">
                            <a class="nav-link" href="/pagina/{{ $mn->id_pagina}}" target="_blank"">{{ $mn->nom_menu }}</a>		        
                          </li>
                          @endif
                      
                      @endif   
                    @endforeach --}}
      		    </ul>		    
      		  </div>
    	   </div>
	    </nav>
   <!--
    <div class="nav-scroller bg-white shadow-sm fixed-top " style="background-color: #b5d4d5  !important;">
      <nav class="container nav nav-underline">
         <div class="col-md-3 bg-danger" align="left"><a class="nav-link active" ><i class="fa fa-envelope"></i> mesadepartesvirtual@regionhuanuco.gob.pe</a></div>
         <div class="col-md-3"><a class="nav-link active" >Central teléfonica <i class="fa fa-phone-volume"></i> (062) 51-2124</a></div>
         <div class="col-md-3"><a class="nav-link active" href="https://mail.regionhuanuco.gob.pe/"><i class="fa fa-envelope"></i> Correo Institucional</a></div>
         <div class="col-md-3" align="right"><a class="nav-link active" href="http://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=10146#.WcqzcWjWyUk"><img src="{{ asset('img/portal.png') }}" alt="" height="30"></a></div>
      </nav>
    </div>-->
     <div class="nav-scroller bg-white shadow-sm fixed-top " style="background-color: {{ $tematm["tmcolor_tema"] }}60  !important;">
      <nav class="container nav nav-underline">
         <div class="col-md-3 bg-danger" align="left"><a href="{!!$tematm["tmtop_mesapartesvirtual"]  !!}" class="nav-link active"  target="_blank"><i class="fa fa-envelope"></i> Nuestra Mesa de Partes Virtual</a></div>
        
         <div class="col-md-5"><a class="nav-link active" >Central teléfonica <i class="fa fa-phone-volume"></i> {!! $tematm["tmtop_fono"] !!}</a></div>
         <div class="col-md-2"><a class="nav-link active" href="{!! $tematm["tmtop_correocorp"]  !!}"><i class="fa fa-envelope"></i> Correo Institucional</a></div>
         <div class="col-md-2" align="right"><a class="nav-link active" href="{!! $tematm["tmtop_transparencia"] !!}"><img src="{{ asset('img/portal.png') }}" alt="" height="30"></a></div>
      </nav>
    </div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    @yield('contenido')
    @yield('codihtml')

  </div>
  <!-- /.content-wrapper -->

  
      {{-- control de scroball top --}}
     <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>

  <!-- Main Footer -->
  <footer class="main-footer fondo7">
    <div class="container">
      <!-- To the right -->
    <!-- <div class="float-right d-none d-sm-inline">
      Anything you want
    </div> -->
    <!-- Default to the left -->
    <!-- <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved. -->
    <div class="row">
      <div class="col-md-3">
        <!-- ubicacion -->
        <a class="navbar-brand mr-auto mr-lg-0" href="/"><img src="{{ $tematm["dnsserver"]}}/storage/{{substr($tematm["tmlogo_tema"],7) }}" height="50"></a>
        {!! $tematm["tmfooter_f1"] !!} 
      </div>
      <div class="col-md-6">
        <h4 class="titulonot_2 text-info" align="center">Ciudadanos</h4>
        <div class="row">
          <div class="col-md-6">
            <ul class="nav nav-pills flex-column ">
               <li class="nav-item nav-link ">                      
                {!! $tematm["tmfooter_f2"] !!}                      
              </li>
              {{-- <li class="nav-item nav-link">
                <button type="button" class="btn btn-block btn-outline-primary col-md-8" onclick="abrir('reclamaciones');"><i class="fa fa-book fa-2x"></i><br> <h5>Libro de reclamaciones</h5></button>
              </li> --}}
             </ul>        
          </div>
          <div class="col-md-6">
             <ul class="nav nav-pills flex-column " style="font-size: 14px">
               <li class="nav-item nav-link ">                      
                {!! $tematm["tmfooter_f3"] !!}                    
              </li>
              {{-- <li class="nav-item nav-link">
                <button type="button" class="btn btn-block btn-outline-info col-md-8" onclick="abrir('link_denuncias');"><i class="fa fa-book fa-2x"></i><br> <h5>denucias y quejas</h5></button>
              </li> --}}
             </ul>
          </div>
        </div>
        
      </div>
      
      <div class="col-md-3">

        {!! $tematm["tmredes_sociales"] !!}
      </div>
    </div>
    </div>
  </footer>


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

<script type="text/javascript" charset="utf-8" async defer>

// para poner comunicados

  $('.toastsDefaultTopLeft').click(function() {
  });
  // para simular la carga
  $(document).ready(function() {
    var percent = 0;
    timerId = setInterval(function() {
        //increment progress bar
        percent += 1;
        $('.progress-bar').css('width', percent+'%');
        $('.progress-bar').attr('aria-valuenow', percent);
        $('.progress-bar').text(percent+'%');
        //complete
        if (percent == 100) {
            clearInterval(timerId);
            $('.information').show();
        }
    }, 150);// 15 segundos
});
</script>
<script>
        //Al cargar la página, asignar evento al botón de notificaciones para mostrarlas.
        $('.toast').toast({ delay: 15000 });//15 segundos
       // $('.toast').toast('show'); //desactivado ultimo 23/06/2020
</script>

<script type="text/javascript">
  $(document).ready(function(){
  $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $('#back-to-top').fadeIn();
      } else {
        $('#back-to-top').fadeOut();
      }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 400);
      return false;
    });
});
</script>
<script type="text/javascript">
 function abrir(url)
 {
 	window.open(url,'_blank');
 }
</script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      language: {
        processing:     "Traitement en cours...",
        search:         "Buscar&nbsp;:",
        lengthMenu:    "Cantidad por página _MENU_ ",
        info:           "Mostrando del _START_ al _END_ del(_TOTAL_) documentos",
        infoEmpty:      "No hay elementos para mostrar",
        infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        infoPostFix:    "",
        loadingRecords: "Chargement en cours...",
        zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        emptyTable:     "No hay documentos con los parametros seleccionados",
        paginate: {
            first:      "Primero",
            previous:   "Anterior",
            next:       "Siguiente",
            last:       "Ultimo"
          }
        }     
    });

     $('#example1_filter label input').on( 'focus', function () {
    this.setAttribute( 'id', 'cerca' );
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

<script  type="text/javascript" charset="utf-8" async defer>
  function cargar(url)
  {
    var tipodoc=$("#tipodoc").val();
    var anio=$("#anio").val()
    // //alert(tipodoc);

    // if(tipodoc!=0 || anio!=0)
    // {
    //   // $('#example1').DataTable({
    //   //           "responsive": true,
    //   //          "autoWidth": false,
    //   //          'processing': true,
    //   //          'serverSide': true,
    //   //          'ajax': 'lnormatividad/'+tipodoc+'/'+anio 
    //   //       });
    //   //alert('lnormatividad/'+tipodoc+'/'+anio);
    window.location.href='../../lnormatividad/'+tipodoc+'/'+anio;
    //   //window.open(url);
    // }
    // else{
    //   //alert('aqui cargo por defecto')
    // } 
    //window.location.href=url;
  }
  //cargar();
// obtener valor del 
//   $(document).on('change', '#tipodoc', function(event) {
//      alert($('#tipodoc').val());
// });
</script>
<script type="text/javascript">
  $("[data-id]").click(function(event){
  $("#inicial-modal").modal('show');$("#tarjeta").hide(0);$("#load").show(0);
//   $.post( "http://www2.regionhuanuco.gob.pe/portal/load_asinc/organigrama.php",{id:$(this).data("id")}, function(data) {
//     $("#tarjeta").html(data);
//     $("#load").hide(0);$("#tarjeta").show(500);;console.log("Cargado..");
// })
  // console.log($(this).data("rp"));
  var id=$(this).data("id");
  $.ajax({
          url:'/datosfuncionario/'+id,
          // data:{'name':"luis"},
          type:'get',
          success: function (response) {
                      //alert(response);                     
                      // var html='<table class="table">'+
                      //       '<tr><td><strong>OFICINA<strong></td><td>'+response.oficina+'</td></tr>'+
                      //       '<tr><td><strong>CARGO<strong></td><td>'+response.cargo+'</td></tr>'+
                      //       '<tr><td><strong>TELEFONO<strong></td>'+response.telefono+'<td></td></tr>'+
                      //       '<tr><td><strong>ANEXO<strong></td><td>'+response.anexo+'</td></tr>'+
                      //       '<tr><td><strong>USUARIO<strong></td><td>'+response.usuario+'</td></tr>'+
                      //       '<tr><td><strong>NOMBRE<strong></td><td>'+response.nombre+'</td></tr>'+
                      //       '<tr><td><strong>CORREO<strong></td><td>'+response.correo+'</td></tr>'+
                      //       '<tr><td><strong>CELULAR<strong></td><td>'+response.telefonos+'</td></tr>'+
                      //       '</table>';
                             $('#tarjeta').html(response);
                             $("#tarjeta").show(500);
          },
          statusCode: {
             404: function() {
                alert('web not found');
             }
          },
          error:function(x,xs,xt){
              //nos dara el error si es que hay alguno
              window.open(JSON.stringify(x));
              //alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
          }
       });
  });
</script>
@yield('popup')
@yield('script')
</body>
</html>
