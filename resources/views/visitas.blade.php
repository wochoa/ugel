
@extends('plantillas.plantilla')

@section('contenido')

<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark titulonot_2"> REGISTRO <small> | VISITAS</small></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item titulonot_2"><a href="/">Inicio</a></li>
          <li class="breadcrumb-item titulonot_2 active ">registro de visitas</li>
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
                  <h3 class="card-title titulonot_2"><strong>Registro de visitas</strong></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body titulonot_2" style="padding: 25px">

                 <table class="table table-sm table-bordered" style="width: 100%; font-size: 13px">
                  <thead>
                    <tr>
                      <th>N</th>                    
                      <th>DNI</th>
                      <th>NOMBRE VISITANTE</th>
                      <th>HORA INGRESO</th>
                      <th>ENTIDAD</th>
                      <th>MOTIVO</th>
                      <th>HORA SALIDA</th>
                      <th>OFICINA</th>
                      <th>FUNCIONARIO</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $i=1;
                    @endphp
                    @foreach($visitas as $direct)
                     <tr>
                      <td>{{$direct->idregvisita}}</td>
                      <td>{{$direct->dni}}</td>
                      <td>{{$direct->nombre}}</td>
                      <td>{{$direct->fechaingreso}}</td>
                      <td>{{$direct->iprocedencia}}</td>
                      <td>{{$direct->motivo}}</td>
                      <td>{{$direct->fechasalida}}</td>
                      <td>{{html_entity_decode(utf8_encode($direct->ofi_nombre))}}</td>
                      <td>{{$direct->fun_nombres}}</td>
                     </tr>
                     @php
                     $i++;
                     @endphp
                    @endforeach
                  </tbody>
                </table>
              <br>
              {{ $visitas->render() }}
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            
          </div>
  </div>
</div>

@endsection()