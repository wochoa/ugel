
@extends('plantillas.plantilla')

@section('contenido')

<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark titulonot_2"> PUBLICACIONES <small> | de convocatorias </small></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item titulonot_2"><a href="/">Inicio</a></li>
          <li class="breadcrumb-item titulonot_2 active ">PUBLICACIONES</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<!-- Main content enlaces de interes-->
<div class="content fondo1" style="padding-top:40px;">

  <div class="container">

        
        <div class="row" > 
             <div class="col-md-12">
              <div class="card">
                <div class="card-header bg-gray">
                  <h3 class="card-title titulonot_2"><strong>Listado de convocatorias realizadas</strong></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body titulonot_2" style="padding: 25px">

                  

		<div class="table-responsive">

                   <table class="table-bordered table table-hover " style="font-size:11px;">
                    <thead>
                        <tr class="headings" style="background: #e9ecef;">
                           
                             <th class="column-title">NOMBRE DEL PROCESO</th>
                            <th class="column-title">BASES</th>
                            <th class="column-title">RESULTADO E. CURRICULAR</th>
                            <th class="column-title">RESULTADO E. ENTREVISTA</th>
                            <th class="column-title">RESULTADO FINAL</th>
                            
                    </thead>
                    <tbody>
                      @php
                      $i=0;
                      $color='';
                      $datosarray = array();
                      $dataalmacenado=array();
                      $arraytotal=array();
                      @endphp

                           @foreach($data as $convo)


                               @php

                              
                                $datosarray[$i]=$convo->id_proc_sel_cas;


                                if($i==0){$dataalmacenado[]=$convo->id_proc_sel_cas;//por primera vez asumimos todo
                                          //echo'<tr>';
                                          $inscripcion='<a href="'.$convo->url_archivo.'" class="btn btn-outline-primary btn-xs" style="margin-top:3px">'.$convo->nom_archivo.'</a><br>';
                                        }
                                else{
                                      if($convo->id_proc_sel_cas!=$datosarray[$i-1]){//aqui decimos si los procesos ya no se repiten hacemos cierre de fila y hacemos apertura de fila. y las variables debe empezar en cero
                                        $dataalmacenado[]=$convo->id_proc_sel_cas;

                                        echo'<tr><td style="background:'.$color.'">'.$nomporceso.@$espan.'</td><td>'.utf8_encode($inscripcion).'</td><td>'.utf8_encode(@$curricular).'</td><td>'.@$entrevista.'</td><td>'.@$resufinal.'</td></tr>';

                                        // aqui ponemos las variables en cero
                                        $inscripcion="";
                                        $curricular="";
                                        $entrevista="";
                                        $resufinal="";
                                        $nomporceso="";

                                        $inscripcion='<a href="'.$convo->url_archivo.'" class="btn btn-outline-primary btn-xs" style="margin-top:3px">'.$convo->nom_archivo.'</a><br>';
                                      }else // si la iteracion no cambia -> se debe almacenar en variable
                                        {
                                          $nomporceso=$convo->proc_sel_cas_descripcion;

                                          $fechaini=$convo->proc_sel_cas_fecha_inicio;
                                          $fechafin=$convo->proc_sel_cas_fecha_termino;
                                          $fechains=$convo->cas_proc_sel_fecha_fin_inscripcion;
                                          $fecharesul=$convo->cas_proc_sel_fecha_resultados;

                                          $fecha_actual = strtotime(date("d-m-Y H:i:00",time()));
                                          $fecha_entrada = strtotime($fecharesul);

                                          if($fecha_actual>=$fecha_entrada){$color='#ffe5e5';$espan='<span class="right badge badge-danger">CONCLUIDO</span>';$activo_preinscripcion=3;}//color rojo
                                          if ($fecha_actual>strtotime($fechains) and $fecha_actual<strtotime($fechafin)) {$color='#f7d097';$espan='<span class="right badge badge-warning">EN PROCESO</span>';$activo_preinscripcion=2;}// ambar
                                          if(($fecha_actual>strtotime($fechaini) or $fecha_actual<=strtotime($fechaini) ) and $fecha_actual<strtotime($fechains)){$color='#c0e0d3'; $espan='<span class="right badge badge-success">NUEVO</span>';$activo_preinscripcion=1;}//verde

                                           switch ($convo->etapa)
                                            {
                                                case 'INSCRIPCION':$inscripcion=@$inscripcion.'<a href="'.$convo->url_archivo.'" class="btn btn-outline-primary btn-xs" style="margin-top:3px" target="_blank">'.$convo->nom_archivo.'</a><br>';
                                                  break;
                                                
                                                case 'CURRICULAR':$curricular=@$curricular.'<a href="'.$convo->url_archivo.'" class="btn btn-xs btn-primary" style="margin-top:3px" target="_blank">'.$convo->nom_archivo.'</a><br>';
                                                  break;

                                                  case 'ENTREVISTA':$entrevista=@$entrevista.'<a href="'.$convo->url_archivo.'" class="btn btn-xs btn-info" style="margin-top:3px" target="_blank">'.$convo->nom_archivo.'</a><br>';
                                                  break;

                                                  case 'FINAL':$resufinal=@$resufinal.'<a href="'.$convo->url_archivo.'" class="btn btn-xs btn-success" style="margin-top:3px" target="_blank">'.$convo->nom_archivo.'</a><br>';
                                                  break;
                                              }

                                        } 
                                }
                                $i++; 
                                
                               @endphp
                               

                           @endforeach
                           {{-- {{json_encode($dataalmacenado)}} --}}
                           @php
                           $cantidad=count($dataalmacenado);
                           $datos=$data;
                           echo json_encode($datos,JSON_FORCE_OBJECT);
                           @endphp



                         


                    </tbody>
                </table>
	      </div>
                </div>
                <?php
                //print_r($data);
                ?>

                {{-- {{ $data }} --}}
                <!-- /.card-body -->
              </div>
            </div>
            
          </div>
  </div>
</div>

@endsection()
