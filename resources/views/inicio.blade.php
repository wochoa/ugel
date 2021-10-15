
@extends('plantillas.plantilla')

@section('css')

  <style>
      .blog .carousel-indicators {
	left: 0;
	top: auto;
    bottom: -40px;

}

/* The colour of the indicators */
.blog .carousel-indicators li {
    background: #a3a3a3;
    border-radius: 50%;
    width: 8px;
    height: 8px;
}

.blog .carousel-indicators .active {
background: #707070;
}
  </style>
@endsection

@section('contenido')

@php
$urltema=route('tema');
$tematm = json_decode(getRemoteFile($urltema), true);
$dnsserver=$tematm["dnsserver"];
@endphp

@if(count($slider)>0)
<div class=" fondo1">
  <div style="margin-right: auto;
  margin-left: auto; width:100%;">
    {{-- {{count($slider) }} --}}
    <div id="slidercarr" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#slidercarr" data-slide-to="0" class="active"></li>
        <li data-target="#slidercarr" data-slide-to="1"></li>
        <li data-target="#slidercarr" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="img-fluid" src="{{ $dnsserver}}/storage/{{substr(@$slider[0]->img_slider,7) }}"  alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ $dnsserver}}/storage/{{substr(@$slider[0]->img_slider,7) }}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ $dnsserver}}/storage/{{substr(@$slider[0]->img_slider,7) }}" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#slidercarr" role="button" data-slide="prev">
        <span class="carousel-control-custom-icon" aria-hidden="true">
          <i class="fas fa-chevron-left"></i>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#slidercarr" role="button" data-slide="next">
        <span class="carousel-control-custom-icon" aria-hidden="true">
          <i class="fas fa-chevron-right"></i>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
@endif
<!-- Content Header (Page header) noticias carouse-->
                          <!-- fondo7  slider-->

    <div class="content-header fondo2">
      <div class="container">
          <div id="carouselExampleIndicators" class="carousel slide destacados" data-ride="carousel">
           
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-7">
                     <div class="card card_not">                      
                     
                      {{-- <img src="{{json_decode(@$publicacion[0]->con_image1)->{'tumb720x482'} }}" class="card-img-top" alt="..."> --}}
                      <img src="{{ $dnsserver}}/storage/{{substr(@$publicacion[0]->img1,7) }}" class="card-img-top" alt="...">
                      
                      <div class="card-body">
                       <a href="noticias/{{@$publicacion[0]->idnoticias}}" title=""> 
                         @php
                          $date0 = date_create(@$publicacion[0]->fechapubli);
                          $fecha0= date_format($date0, 'd-m-Y -  H:i:s');
                          @endphp
                        <h5 class="card-title titulonot"><small class="bg-warning" style="padding-left: 5px;padding-right: 5px">{{$fecha0}}</small><br>{!!substr(@$publicacion[0]->titulo,0) !!}</h5>
                      </a>
                      </div>
                    </div>
                    
                  </div>
                  <div class="col-md-5">
                      <div class="row">
                        <div class="col-md-6">
                           <div class="card w-100">
                            <img src="{{ $dnsserver}}/storage/{{substr(@@$publicacion[1]->img1,7) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text titulonot_2"><a href="noticias/{{@$publicacion[1]->idnoticias}}" title=""> {!!substr(@$publicacion[1]->titulo,0,60) !!} .....  <small class="float-right bg-primary" style="padding: 0px 3px 0px 3px">Ver más</small></a></p>
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-md-6">
                           <div class="card w-100">
                            <img src="{{ $dnsserver}}/storage/{{substr(@$publicacion[2]->img1,7) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text titulonot_2"><a href="noticias/{{@$publicacion[2]->idnoticias}}" title="">{!!substr(@$publicacion[2]->titulo,0,60) !!} .....  <small class="float-right bg-primary" style="padding: 0px 3px 0px 3px">Ver más</small></a></p>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                           <div class="card w-100">
                            <img src="{{ $dnsserver}}/storage/{{substr(@$publicacion[3]->img1,7) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text titulonot_2"><a href="noticias/{{@$publicacion[3]->idnoticias}}" title="">{!!substr(@$publicacion[3]->titulo,0,60) !!} .....  <small class="float-right bg-primary" style="padding: 0px 3px 0px 3px">Ver más</small></a></p>
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-md-6">
                           <div class="card w-100">
                            <img src="{{ $dnsserver}}/storage/{{substr(@$publicacion[4]->img1,7) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text titulonot_2"><a href="noticias/{{@$publicacion[4]->idnoticias}}" title="">{!!substr(@$publicacion[4]->titulo,0,60) !!} .....  <small class="float-right bg-primary" style="padding: 0px 3px 0px 3px">Ver más</small></a></p>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-7">
                     <div class="card card_not">                      
                     
                      <img src="{{ $dnsserver}}/storage/{{substr(@$publicacion[5]->img1,7) }}" class="card-img-top" alt="...">
                      <div class="card-body">
                       <a href="noticias/{{@$publicacion[5]->idnoticias}}" title=""> 
                         @php
                          $date5 = date_create(@$publicacion[5]->fechapubli);
                          $fecha5= date_format($date5, 'd-m-Y -  H:i:s');
                          @endphp
                        <h5 class="card-title titulonot"><small class="bg-danger" style="padding-left: 5px;padding-right: 5px">{{$fecha5}}</small><br>{!!substr(@$publicacion[5]->titulo,0,60) !!}</h5>
                      </a>
                      </div>
                    </div>
                    
                  </div>
                  <div class="col-md-5">
                      <div class="row">
                        <div class="col-md-6">
                           <div class="card w-100">
                            <img src="{{ $dnsserver}}/storage/{{substr(@$publicacion[6]->img1,7) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text titulonot_2"><a href="noticias/{{@$publicacion[6]->idnoticias}}" title=""> {!!substr(@$publicacion[6]->titulo,0,60) !!} .....  <small class="float-right bg-primary" style="padding: 0px 3px 0px 3px">Ver más</small></a></p>
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-md-6">
                           <div class="card w-100">
                            <img src="{{ $dnsserver}}/storage/{{substr(@$publicacion[7]->img1,7) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text titulonot_2"><a href="noticias/{{@$publicacion[7]->idnoticias}}" title="">{!!substr(@$publicacion[7]->titulo,0,60) !!} .....  <small class="float-right bg-primary" style="padding: 0px 3px 0px 3px">Ver más</small></a></p>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                           <div class="card w-100">
                            <img src="{{ $dnsserver}}/storage/{{substr(@$publicacion[8]->img1,7) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text titulonot_2"><a href="noticias/{{@$publicacion[8]->idnoticias}}" title="">{!!substr(@$publicacion[8]->titulo,0,60) !!} .....  <small class="float-right bg-primary" style="padding: 0px 3px 0px 3px">Ver más</small></a></p>
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-md-6">
                           <div class="card w-100">
                            <img src="{{ $dnsserver}}/storage/{{substr(@$publicacion[9]->img1,7) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text titulonot_2"><a href="noticias/{{@$publicacion[9]->idnoticias}}" title="">{!!substr(@$publicacion[9]->titulo,0,60) !!} .....  <small class="float-right bg-primary" style="padding: 0px 3px 0px 3px">Ver más</small></a></p>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                </div>
              </div>              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="margin-left:-100px;">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="margin-right: -100px;">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="row">
            <div class="col-sm-12 ver-mas-noti text-right">
              <a target="_blank" href="allnoticias" class="text-warning">Ver más noticias<i class="fas fa-arrow-circle-right" aria-hidden="true"></i></a>
            </div>
          </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content enlaces de interes-->
    <div class="content fondo1" style="padding-top:40px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            @php
                $seccion1=array();
                $seccion2=array();
                $seccion3=array();
                $seccion4=array();
                $seccion5=array();
                
            @endphp
            @for($i = 0; $i < count($seccion); $i++)
              @switch($seccion[$i]->seccion_pag)
                  @case(1)
                      @php
                          $seccion1[]=$seccion[$i];
                      @endphp
                      @break
                  @case(2)
                      @php
                      $seccion2[]=$seccion[$i];
                     @endphp                      
                      @break

                  @case(3)
                      @php
                      $seccion3[]=$seccion[$i];
                    @endphp                       
                      @break
                  @case(4)
                      @php
                      $seccion4[]=$seccion[$i];
                    @endphp  
                      @break
                  @case(5)
                      @php
                      $seccion5[]=$seccion[$i];
                    @endphp  
                      @break
              @endswitch
            @endfor

          {{-- codficcando para seccion1 --}}


            @foreach(array_chunk($seccion1, 6) as $sec1)
              <div class="row" style="padding-top:5px;padding-bottom:10px">
                        @foreach($sec1 as $add)
                        <div class="col-xs-4 col-sm-2">
                          <button type="button" class="btn btn-block btn-outline-{{ $add->color }}" onclick="abrir('{{ $add->enlace }}');"><i class="{{ $add->icono }} fa-2x"></i><br> <h5 >{!! utf8_encode($add->texto_enlace) !!}</h5></button>
                        </div>
                        @endforeach
              </div>
            @endforeach

            {{-- seccion 2 --}} 
            @foreach(array_chunk($seccion2, 3) as $sec2)
            <div class="row">
                      @foreach($sec2 as $add2)
                        {!! utf8_encode($add2->titulo) !!}
                      @endforeach
            </div>
           @endforeach
            {{-- seccion para publicacion de revistas --}}
            {{-- seccion 3--}}
            {{-- <h3 class="titulonot_2">Revista Regional</h3> --}}
            {{-- seccion 3--}}
            @foreach(array_chunk($seccion3, 2) as $sec3)
            <div class="row">
                      @foreach($sec3 as $add3)
                      <div class="col-md-6">
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-{{ $add3->color }}">
                          <div class="col-auto d-none d-lg-block">
                            <img src="{{ $dnsserver}}/storage/{{substr($add3->archivo_imagen,7) }}" width="200" alt="">
                          </div>
                          <div class="col p-4 d-flex flex-column position-static">
                            {!! utf8_encode($add3->titulo) !!}
                            <a href="https://drive.google.com/file/d/1vy3Ckvxqrx3I3ABJIGx1twMuMiZTWmeL/view?usp=sharing" class="titulonot_2 text-warning" target="_blank">{{ $add3->texto_enlace }} <i class="fas fa-arrow-circle-right" aria-hidden="true"></i></a>
                          </div>
                          
                        </div>
                      </div>
                      @endforeach
            </div>
           @endforeach
          </div>

          <div class="col-lg-3">{{-- seccion 5 --}}

            @foreach($seccion5 as $sec5)

            @if($sec5->archivo_imagen<>'')
            <a href="{{ $sec5->enlace }}" class="dropdown-item bg-{{ $sec5->color }}" target="_blank">
              <div class="media">
                <img src="{{ $dnsserver}}/storage/{{substr($sec5->archivo_imagen,7) }}" alt="User Avatar" class="img-fluid">
              </div>
            </a>
            {{-- <div class="dropdown-divider"></div> --}}
              @else
              <a href="/anuncios" class="btn btn-info btn-block mb-3 titulonot_2"><i class="fas fa-address-card"></i> Ver todo los anuncios publicados</a>
            @endif
              
            @endforeach


          </div>          
        </div>  
        <!-- /.row -->
      </div><!-- /.container-fluid --> 
    </div><!-- /.content -->

    @foreach(array_chunk($seccion4, 1) as $sec4)
    <div class="content fondo3" style="padding-top:40px; padding-bottom: 30px; color: #000;" >{{-- seccion 4--}}
      <div class="container">
          <div class="row">
              @foreach($sec4 as $add4)
              <div class="col-md-9"> 
                  <h4 class="lead">{{ utf8_encode($add4->titulo) }}</h4>
                  <h5 >{{ $add4->texto_enlace }}</h5>
              </div>
              <div class="col-md-3">
                  <a class="btn btn-block btn-outline-secondary" href="{{ $add4->enlace }}" target="_blank">Descargar</a>
              </div>
              @endforeach
          </div>
        </div>
    </div>
  @endforeach
<!-- /.content -->

    <!-- Enlace referencial -->
    <div class="content fondo5" style="padding-top:40px; padding-bottom: 30px; " >
      <div class="container">
        <h4 class="titulonot_2 text-warning">Enlace <a id="id01" data-toggle="modal" data-target="#modal-default">refencial</a></h4>
          

          <div class="row blog">
            {{-- {{ print_r($ereferencial) }} --}}
            <div class="col-md-12">
                <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators " style="margin-bottom: -20px !important;">
                        <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#blogCarousel" data-slide-to="1"></li>
                    </ol>

                    <!-- Carousel items -->
                    <div class="carousel-inner">

                      {{-- @if(count($ereferencial)>0)
                      si existe
                      @endif --}}
                      
                      <div class="carousel-item active">
                        <div class="row">
                            @if( @$ereferencial[0]->link_refe)<div class="col-md-2"><a href="{{ @$ereferencial[0]->link_refe }}" target="_blank"><img src="{{ $dnsserver}}/storage/{{substr(@$ereferencial[0]->img_refe,7) }}" alt="Image" style="max-width:100%;"></a></div>@endif
                            @if( @$ereferencial[1]->link_refe)<div class="col-md-2"><a href="{{ @$ereferencial[1]->link_refe }}" target="_blank"><img src="{{ $dnsserver}}/storage/{{substr(@$ereferencial[1]->img_refe,7) }}" alt="Image" style="max-width:100%;"></a></div>@endif
                            @if( @$ereferencial[2]->link_refe)<div class="col-md-2"><a href="{{ @$ereferencial[2]->link_refe }}" target="_blank"><img src="{{ $dnsserver}}/storage/{{substr(@$ereferencial[2]->img_refe,7) }}" alt="Image" style="max-width:100%;"></a></div>@endif
                            @if( @$ereferencial[3]->link_refe)<div class="col-md-2"><a href="{{ @$ereferencial[3]->link_refe }}" target="_blank"><img src="{{ $dnsserver}}/storage/{{substr(@$ereferencial[3]->img_refe,7) }}" alt="Image" style="max-width:100%;"></a></div>@endif
                            @if( @$ereferencial[4]->link_refe)<div class="col-md-2"><a href="{{ @$ereferencial[4]->link_refe }}" target="_blank"><img src="{{ $dnsserver}}/storage/{{substr(@$ereferencial[4]->img_refe,7) }}" alt="Image" style="max-width:100%;"></a></div>@endif
                            @if( @$ereferencial[5]->link_refe)<div class="col-md-2"><a href="{{ @$ereferencial[5]->link_refe }}" target="_blank"><img src="{{ $dnsserver}}/storage/{{substr(@$ereferencial[5]->img_refe,7) }}" alt="Image" style="max-width:100%;"></a></div>@endif
                            {{-- <div class="col-md-3"><a href="#"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div> --}}
                            
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->

                    <div class="carousel-item">
                        <div class="row">
                          @if( @$ereferencial[6]->link_refe)<div class="col-md-2"><a href="{{ @$ereferencial[6]->link_refe }}" target="_blank"><img src="{{ $dnsserver}}/storage/{{substr(@$ereferencial[6]->img_refe,7) }}" alt="Image" style="max-width:100%;"></a></div>@endif
                          @if( @$ereferencial[7]->link_refe)<div class="col-md-2"><a href="{{ @$ereferencial[7]->link_refe }}" target="_blank"><img src="{{ $dnsserver}}/storage/{{substr(@$ereferencial[7]->img_refe,7) }}" alt="Image" style="max-width:100%;"></a></div>@endif
                          @if( @$ereferencial[8]->link_refe)<div class="col-md-2"><a href="{{ @$ereferencial[8]->link_refe }}" target="_blank"><img src="{{ $dnsserver}}/storage/{{substr(@$ereferencial[8]->img_refe,7) }}" alt="Image" style="max-width:100%;"></a></div>@endif
                          @if( @$ereferencial[9]->link_refe)<div class="col-md-2"><a href="{{ @$ereferencial[9]->link_refe }}" target="_blank"><img src="{{ $dnsserver}}/storage/{{substr(@$ereferencial[9]->img_refe,7) }}" alt="Image" style="max-width:100%;"></a></div>@endif
                          @if( @$ereferencial[10]->link_refe)<div class="col-md-2"><a href="{{ @$ereferencial[10]->link_refe }}" target="_blank"><img src="{{ $dnsserver}}/storage/{{substr(@$ereferencial[10]->img_refe,7) }}" alt="Image" style="max-width:100%;"></a></div>@endif
                          @if( @$ereferencial[11]->link_refe)<div class="col-md-2"><a href="{{ @$ereferencial[11]->link_refe }}" target="_blank"><img src="{{ $dnsserver}}/storage/{{substr(@$ereferencial[11]->img_refe,7) }}" alt="Image" style="max-width:100%;"></a></div>@endif
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->
                  </div>
                    <!--.carousel-inner-->
                </div>
                <!--.Carousel-->

            </div>
          </div>



      </div>
    </div>
  <!-- /.content -->  


    <!--  para poner notificaciones -->
      {{-- <div id="toastsContainerTopRight" class="toasts-top-left fixed">
        @foreach($popup as $comunicado)

        <div class="toast bg-default fade show animated jello" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header titulonot_2"><strong class="mr-auto">{{ utf8_encode($comunicado->titulopopup)}}</strong><h5>Comunicado</h5><button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close" style="outline:none;"><span aria-hidden="true">×</span></button>
          </div>
          <div class="toast-body">
           <a href="{{$comunicado->enlace_popup}}" target="_blank"> <img src="{{ Session('dnsserver')}}/storage/{{substr($comunicado->nompopup,7) }}" alt="" class="img-fluid" ></a>
           
           
            <div class="progress progress-xs" >
              <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 0%; font-size:9px" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
            </div>
          </div>
        </div>
        @endforeach

       
      </div> --}}
    <!-- fin de notificacione -->


    @endsection
    @section('codihtml')
    
    
        {{-- POPUP CENTRAL --}}
        @php
          $j=0;
          $cant=count($popup);
        @endphp
         <div class="modal fade" id="modal-default" data-backdrop="static" >{{-- data-backdrop="static" --}}
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
              
              <div class="modal-body" style="padding: 2px !important;">
                <a href="#" class="bg-warning" data-dismiss="modal" style="float: right;position: relative;padding-left: 8px;border-radius: 10px;width: 23px;margin-top: -20px;margin-right: -5px;font-weight: bold;">x</a>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                   {{ $cant }}
                  @foreach($popup as $central)
                  @php
                    $j++;
                  @endphp
        
                    @if($j==1)
                          
                                <div class="carousel-item active" data-interval="40000">
                                  <img src="{{ $dnsserver}}/storage/{{substr($central->nompopup,7) }}" class="img-fluid" alt="...">
                                  @if($central->enlace_popup<>'#')
                                  <div align="center"><a href="{{ $central->enlace_popup }}" class="btn btn-sm btn-warning" style="padding:1px !important;"><i class="fas fa-arrow-circle-right"></i>  {{ utf8_encode($central->titulopopup) }}</a> </div>
                                  @endif
                                </div>
                           
                         
                      @else
                          
                          
                              <div class="carousel-item" data-interval="20000">                        
                                <img src="{{ $dnsserver}}/storage/{{substr($central->nompopup,7) }}" class="img-fluid" alt="...">
                                @if($central->enlace_popup<>'#')
                                <div align="center"><a href="{{ $central->enlace_popup }}" class="btn btn-sm btn-warning" style="padding:1px !important;"><i class="fas fa-arrow-circle-right"></i>  {{ utf8_encode($central->titulopopup)}}</a> </div>
                                @endif
                            </div>
                           
                    @endif
                  @endforeach
        
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-info" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls " role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-info" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
        
              </div>
              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
         
        
        
         <!-- FINAL DE POPUP  -->
        @endsection
        
      @section('popup')
      <script type="text/javascript">
        function redireccionar(){
          //alert("1");
          document.getElementById('id01').style.display='active';
          $("#id01").trigger("click");
        } 
        setTimeout ("redireccionar()", 1000); //tiempo expresado en milisegundos
        
        // popup slider
        // $(document).ready(function() {
        //   $('.carousel2').carousel({
        //     interval: 2000,
        //     touch:false,
        //     backdrop:'static',
        //     keyboard: false
        //   })
    
          
        // 	});
        
    
      </script>
      <script>
        // optional
		$('#blogCarousel').carousel({
				interval: 6000
		});

    $('#slidercarr').carousel({
				interval: 4000
		});
      </script>
      @endsection