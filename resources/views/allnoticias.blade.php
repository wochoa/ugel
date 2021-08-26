@extends('plantillas.plantilla')

@section('contenido')
@php
$urltema=route('tema');
$tematm = json_decode(getRemoteFile($urltema), true);
$dnsserver=$tematm["dnsserver"];
@endphp
<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark titulonot_2">  <small> REGISTRO DE NOTAS DE PRENSA</small></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item titulonot_2"><a href="/">Inicio</a></li>
          <li class="breadcrumb-item titulonot_2 active ">Noticias</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<!-- Main content enlaces de interes-->
<div class="content fondo1" style="padding-top:40px;">

	<div class="container">
		<div class="row">
			<?php
	      	$cuenta=count($publicacionall);
	      	?>
	      	{{-- {{$cuenta}} --}}
	      	
          <div class="card col-md-12">
              <div class="card-header">
                <h3 class="card-title">Notas de prensa </h3>

                <div class="card-tools">
                  {{-- <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul> --}}
                  {{-- {{ $publicacionall->render() }} --}}
                </div>
              </div>
              <!-- /.card-header -->
              {{-- <div class="card-body p-0">
               ss
              </div> --}}
              <!-- /.card-body -->
            </div>

		</div>
	      <div class="row">
	      	
	      		@foreach ($publicacionall as $key) 
	      			
	      			<div class="col-md-4">
			          <div class="card mb-4 shadow-sm" style="padding-bottom: 10px">
			           			           
			           <?php
			        //    $dataimagen=json_decode($key->img1,true);
			        //    $imagen=$dataimagen['tumb720x482'];
			           

			           $date = date_create($key->fechapubli);
					   $fecha =date_format($date, 'H:i:s | d-m-Y ');
			           ?>
			            <img src="{{ $dnsserver}}/storage/{{substr($key->img1,7) }}" class="bd-placeholder-img card-img-top" alt="">
			            <div class="card-body">
			              <a href="noticias/{{$key->idnoticias}}" title=""> <p class="nav-link">{{ $key->titulo }}</p></a>
			              <div class="d-flex justify-content-between align-items-center">
			                <div class="btn-group" style="padding-left: 5px;">
			                  <button type="button" class="btn btn-sm btn-outline-danger" onclick="abrir('noticias/{{$key->idnoticias}}');">ver más detalles</button>
			                </div>
			                <small class="text-muted badge bg-info" style="padding-right: 10px">{{$fecha}}</small>
			              </div>
			            </div>
			          </div>
			        </div>

	      		
	      		@endforeach

	      		{{ $publicacionall->render() }}
	      	

	      </div>
	</div>
</div>

@endsection()