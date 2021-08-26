
@extends('plantillas.plantilla')

@section('contenido')

<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark titulonot_2"> Página no encontrada</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item titulonot_2"><a href="/">Inicio</a></li>
          <li class="breadcrumb-item titulonot_2 active ">Error</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
      <div class="error-page">
        <h2 class="headline text-danger"> 404</h2>

        <div class="error-content">
          <h3><i class="fas fa-exclamation-triangle text-danger"></i> Página no encontrada</h3>

          <p>
            No pudimos encontrar la página que estabas buscando.
           Mientras tanto, puedes Volver a la pagina de inicio.
           <br>
           <a  class="btn btn-primary" href="/">Haz click en este botón : www.regionhuanuco.gob.pe</a>
          </p>

          
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>

@endsection()