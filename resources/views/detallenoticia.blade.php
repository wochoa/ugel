
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
        <h1 class="m-0 text-dark titulonot_2"> NOTA DE PRENSA <small> | {{ $tematm["nombredireccionweb"] }} </small></h1>
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

        
        <div class="row" > 
             <div class="col-md-9">
                <div class="card">
                  {{-- <div class="card-header bg-gray">
                    <h3 class="card-title titulonot_2"><strong>{{$detallenoticia['con_title']}}</strong></h3>
                  </div> --}}
                 
                  <!-- /.card-header -->
                  <div class="card-body titulonot_2" style="padding: 25px">
                    <h3 class="card-title" style="padding-bottom: 15px"><strong>{{$detallenoticia->titulo}}</strong></h3>
                    
                    
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            @if($detallenoticia->img1)<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>@endif
                            @if($detallenoticia->img2)<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>@endif
                            @if($detallenoticia->img3)<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>@endif
                           
                          </ol>
                          <div class="carousel-inner">
                            @if($detallenoticia->img1)
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="{{ $dnsserver}}/storage/{{substr($detallenoticia->img1,7) }}" alt="First slide">
                            </div>
                            @endif
                             @if($detallenoticia->img2)
                            <div class="carousel-item">
                              <img class="d-block w-100" src="{{ $dnsserver}}/storage/{{substr($detallenoticia->img2,7) }}" alt="Second slide">
                            </div>
                            @endif
                            @if($detallenoticia->img3)
                            <div class="carousel-item">
                              <img class="d-block w-100" src="{{ $dnsserver}}/storage/{{substr($detallenoticia->img3,7) }}" alt="Third slide">
                            </div>
                            @endif
                            
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                                 
                        <div class="titulonot_2" style="padding-top: 10px;font-family: 'Oswald', sans-serif !important;">
                          
                          <div class="dropdown-divider"></div>
                          @php
                          $date = date_create($detallenoticia->fechapubli);
                          $fecha= date_format($date, 'd-m-Y H:i:s');
                          @endphp
                          <small class="bg-info">PUBLICADO EL DÍA: {{$fecha}}, POR LA OFICINA DE IMAGEN INSTITUCIONAL</small> 
                          <div class="dropdown-divider"></div>
                          {!! $detallenoticia->contenido !!}
                        </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                
                
                  <div class="attachment-block clearfix">
                  <img class="attachment-img" src="{{ $dnsserver }}/storage/{{substr($tematm["tmlogo_tema"],7) }}" alt="Attachment Image">

                  <div class="attachment-pushed ">
                    <h4 class="attachment-heading text-primary titulonot_2" style="padding-left: 5px">OFICINA DE IMAGEN INSTITUCIONAL</h4>

                    <div class="attachment-text  titulonot_2" style="padding-left: 5px">
                     Es la oficina encargada de hacer publicaciones de Notas de Prensa
                    </div>
                    <!-- /.attachment-text -->
                  </div>
                  <!-- /.attachment-pushed -->
                </div>
                
              
            </div>
            <div class="col-md-3">
              <div class="card">
                
                  {{-- <h3 class="card-title titulonot_2"><strong>Lineamientos para el traslado</strong></h3> --}}
                  {{-- https://www.facebook.com/pages/Gobierno-Regional-de-Hu%C3%A1nuco/1574977352748158 --}}
                  
                  <div id="fb-root"></div>
                      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2"></script>
                      <div class="fb-page" data-href="{{ $tematm["tmredes_linkface"] }}" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{ Session('tmredes_linkface') }}" class="fb-xfbml-parse-ignore"><a href="{{ Session('tmredes_linkface') }}">Gobierno Regional de Huánuco</a></blockquote></div>
                
              </div> 
              <a href="/" class="btn btn-primary btn-block mb-3 titulonot_2"><i class="fas fa-address-card"></i> Volver a página de inicio</a>     
            </div>
          </div>
          
  </div>
</div>

@endsection()