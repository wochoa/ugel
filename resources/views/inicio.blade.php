
@extends('plantillas.plantilla')

@section('contenido')

@php
$urltema=route('tema');
$tematm = json_decode(getRemoteFile($urltema), true);
$dnsserver=$tematm["dnsserver"];
@endphp


<!-- Content Header (Page header) noticias carouse-->
                          <!-- fondo7 -->

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
                        <h5 class="card-title titulonot"><small class="bg-warning" style="padding-left: 5px;padding-right: 5px">{{$fecha0}}</small><br>{!!substr(utf8_encode(@$publicacion[0]->titulo),0) !!}</h5>
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
                              <p class="card-text titulonot_2"><a href="noticias/{{@$publicacion[1]->idnoticias}}" title=""> {!!substr(utf8_encode(@$publicacion[1]->titulo),0,60) !!} .....  <small class="float-right bg-primary" style="padding: 0px 3px 0px 3px">Ver más</small></a></p>
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-md-6">
                           <div class="card w-100">
                            <img src="{{ $dnsserver}}/storage/{{substr(@$publicacion[2]->img1,7) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text titulonot_2"><a href="noticias/{{@$publicacion[2]->idnoticias}}" title="">{!!substr(utf8_encode(@$publicacion[2]->titulo),0,60) !!} .....  <small class="float-right bg-primary" style="padding: 0px 3px 0px 3px">Ver más</small></a></p>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                           <div class="card w-100">
                            <img src="{{ $dnsserver}}/storage/{{substr(@$publicacion[3]->img1,7) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text titulonot_2"><a href="noticias/{{@$publicacion[3]->idnoticias}}" title="">{!!substr(utf8_encode(@$publicacion[3]->titulo),0,60) !!} .....  <small class="float-right bg-primary" style="padding: 0px 3px 0px 3px">Ver más</small></a></p>
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-md-6">
                           <div class="card w-100">
                            <img src="{{ $dnsserver}}/storage/{{substr(@$publicacion[4]->img1,7) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text titulonot_2"><a href="noticias/{{@$publicacion[4]->idnoticias}}" title="">{!!substr(utf8_encode(@$publicacion[4]->titulo),0,60) !!} .....  <small class="float-right bg-primary" style="padding: 0px 3px 0px 3px">Ver más</small></a></p>
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
                        <h5 class="card-title titulonot"><small class="bg-danger" style="padding-left: 5px;padding-right: 5px">{{$fecha5}}</small><br>{!!substr(utf8_encode(@$publicacion[5]->titulo),0,60) !!}</h5>
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
                              <p class="card-text titulonot_2"><a href="noticias/{{@$publicacion[6]->idnoticias}}" title=""> {!!substr(utf8_encode(@$publicacion[6]->titulo),0,60) !!} .....  <small class="float-right bg-primary" style="padding: 0px 3px 0px 3px">Ver más</small></a></p>
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-md-6">
                           <div class="card w-100">
                            <img src="{{ $dnsserver}}/storage/{{substr(@$publicacion[7]->img1,7) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text titulonot_2"><a href="noticias/{{@$publicacion[7]->idnoticias}}" title="">{!!substr(utf8_encode(@$publicacion[7]->titulo),0,60) !!} .....  <small class="float-right bg-primary" style="padding: 0px 3px 0px 3px">Ver más</small></a></p>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                           <div class="card w-100">
                            <img src="{{ $dnsserver}}/storage/{{substr(@$publicacion[8]->img1,7) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text titulonot_2"><a href="noticias/{{@$publicacion[8]->idnoticias}}" title="">{!!substr(utf8_encode(@$publicacion[8]->titulo),0,60) !!} .....  <small class="float-right bg-primary" style="padding: 0px 3px 0px 3px">Ver más</small></a></p>
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-md-6">
                           <div class="card w-100">
                            <img src="{{ $dnsserver}}/storage/{{substr(@$publicacion[9]->img1,7) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text titulonot_2"><a href="noticias/{{@$publicacion[9]->idnoticias}}" title="">{!!substr(utf8_encode(@$publicacion[9]->titulo),0,60) !!} .....  <small class="float-right bg-primary" style="padding: 0px 3px 0px 3px">Ver más</small></a></p>
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
          <div class="row" >              
              <div id="ereferencial" class="carousel slide destacados" data-ride="carousel">
                
                <div class="carousel-inner">

                  {{-- @foreach(array_chunk($ereferencial, 6) as $eref)
                  <div class="content fondo3">
                    <div class="container">
                        <div class="row">
                            @foreach($eref as $er)
                            
                            @endforeach
                        </div>
                      </div>
                  </div>
                @endforeach --}}

                  <div class="carousel-item active">
                    <div class="row">
                      
                      @foreach($ereferencial as $eref)
                      <div class="col-md-2"><a href="https://apps.contraloria.gob.pe/infobras/" title=""><img src="{{ $dnsserver}}/storage/{{substr($eref->img_refe,7) }}" class="img-fluid"  alt="..." height="48" ></a></div>
                        
                      @endforeach
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-2"><a href="http://www.pronied.gob.pe/" title=""><img src="img/referencial/pronied.png" class="img-fluid"  alt="..." height="48"></a></div>
                      <div class="col-md-2"><a href="https://www.indecopi.gob.pe/mapadeconsumo" title=""><img src="img/referencial/consumo.gif" class="img-fluid" alt="..." height="48"></a></div>
                      <div class="col-md-2"><a href="http://casillas.pj.gob.pe/redamWeb/" title=""><img src="img/referencial/redam-fc.jpg"  class="img-fluid" alt="..." height="48"></a></div>
                      <div class="col-md-2"><a href="http://www.midis.gob.pe/sellomunicipal/" title=""><img src="img/referencial/sello-municipal2.jpg"  class="img-fluid" alt="..." height="48"></a></div>
                      <div class="col-md-2"><a href="http://www.osce.gob.pe/" title=""><img src="img/referencial/seace-fc.jpg" class="img-fluid" alt="..." height="48"></a></div>
                      <div class="col-md-2"><a href="http://www.mef.gob.pe/index.php?option=com_content&view=section&id=28&Itemid=100674&lang=es" title=""><img src="img/referencial/snip-fc.jpg" class="img-fluid" alt="..." height="48"></a></div>
                    </div>
                  </div>  
                  
                  
                </div>
                <a class="carousel-control-prev" href="#ereferencial" role="button" data-slide="prev" style="margin-left:-80px;">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#ereferencial" role="button" data-slide="next" style="margin-right: -80px;">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
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
              {{-- <div class="modal-header">
                <h4 class="modal-title">Comunicados</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline:none;">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div> --}}
              <div class="modal-body" style="padding: 2px !important;">
                <a href="#" class="bg-warning" data-dismiss="modal" style="float: right;position: relative;padding-left: 8px;border-radius: 10px;width: 23px;margin-top: -20px;margin-right: -5px;font-weight: bold;">x</a>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                   
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
      @endsection