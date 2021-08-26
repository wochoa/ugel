
@extends('plantillas.plantilla')

@section('contenido')

<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark titulonot_2"> APLICATIVOS <small> | Trabajo Remoto</small></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item titulonot_2"><a href="/">Inicio</a></li>
          <li class="breadcrumb-item titulonot_2 active ">aplicativos</li>
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
                  <h3 class="card-title titulonot_2"><strong>Aplicativos para el Trabajo remoto</strong></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body titulonot_2" style="padding: 25px">

                 <div class="timeline">
                    <!-- timeline time label -->
                    <div class="time-label">
                      <span class="bg-red">Para Reuniones virtuales o video conferencia</span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-video bg-blue"></i>
                      <div class="timeline-item">
                        <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                        <h3 class="timeline-header"><a href="#">Plataforma</a> ZOOM</h3>

                        <div class="timeline-body">
                         
                          <div style="background-color: #fff">
                           <a href="https://zoom.us/" target="_blank"><img src="https://d24cgw3uvb9a9h.cloudfront.net/static/93986/image/new/ZoomLogo.png" height="40" alt="..."></a>
                         </div>
                        </div>
                        <div class="timeline-footer">
                          <a href="documentos/Manual_Zoom.pdf" class="btn btn-primary btn-sm" target="_blank">Ver manual</a>
                          <a href="https://zoom.us/" class="btn btn-info btn-sm" target="_blank">Ir a la plataforma</a>
                        </div>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-video bg-green"></i>
                      <div class="timeline-item">
                        <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>
                        <h3 class="timeline-header"><a href="#">Plataforma</a> JITSI</h3>
                        <div class="timeline-body">
                         <div style="background-color: #0c5ecb;width: 200px">
                           <a href="https://meet.jit.si/" target="_blank"><img src="https://web-cdn.jitsi.net/meetjitsi_4127.780/images/watermark.png" height="74" alt="..."></a>
                         </div>
                        </div>
                        <div class="timeline-footer">
                          <a href="documentos/Manual_JitsiMeet_Gore_Hco.pdf" class="btn btn-primary btn-sm" target="_blank">Ver manual</a>
                          <a href="https://meet.jit.si/" class="btn btn-info btn-sm" target="_blank">Ir a la plataforma</a>
                        </div>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-video  bg-yellow"></i>
                      <div class="timeline-item">
                        <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>
                        <h3 class="timeline-header"><a href="#">Plataforma</a> Google Meet</h3>
                        <div class="timeline-body">
                         <div style="background-color: #fff">
                           <a href="https://meet.google.com/" target="_blank"><img src="https://www.gstatic.com/meet/google_meet_horizontal_wordmark_icon_40dp_ca224cf421a1cad730d46514bc52cee4.png" alt="..."></a>
                         </div>
                        </div>
                        <div class="timeline-footer">
                          <a href="documentos/Manual_GoogleMeet.pdf" class="btn btn-primary btn-sm" target="_blank">Ver manual</a>
                          <a href="https://meet.google.com/" class="btn btn-info btn-sm" target="_blank">Ir a la plataforma</a>
                        </div>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline time label -->
                    <div class="time-label">
                      <span class="bg-green">Plataformas Sociales</span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                      <i class="fa fa-comments bg-purple"></i>
                      <div class="timeline-item">
                        <span class="time"><i class="fas fa-clock"></i> 2 days ago</span>
                        <h3 class="timeline-header"><a href="#">Para trabajos por actividades y desarrollo de las mismas, se recomienda cualquiera de los tres sistemas.</a> </h3>
                        <div class="timeline-body">
                          <a href="https://web.whatsapp.com/" target="_blank"><img src="https://static.whatsapp.net/rsrc.php/yv/r/-r3j-x8ZnM7.svg" style="background-color: #28a745; padding: 5px" alt="..."></a>
                          <a href="https://web.telegram.org/" target="_blank"><img src="https://telegram.com.es/wp-content/uploads/2015/02/telegram.png" height="49" alt="..." ><strong>Telegram</strong></a>
                          
                        </div>
                      </div>
                    </div>
                   <!-- END timeline item -->
                    <!-- timeline time label -->
                    <div class="time-label">
                      <span class="bg-info">Plataformas de desarrollo de actividades</span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-video bg-maroon"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="fas fa-clock"></i> 5 days ago</span>

                        <h3 class="timeline-header"><a href="#">Para trabajos por actividades y desarrollo de las mismas, se recomienda cualquiera de los tres sistemas.</a></h3>

                        <div class="timeline-body">
                          <a href="https://trello.com/home" target="_blank"><img src="img/social/trello.png" height="120" alt="..."></a>
                          <a href="https://taskworld.com/es/asana-vs-taskworld/" target="_blank"><img src="img/social/asana.jpg" height="120" alt="..."></a>
                          <a href="https://taiga.io/" target="_blank"><img src="img/social/taiga.png" height="120" alt="..."></a>
                        </div>
                        
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline time label -->
                    <div class="time-label">
                      <span class="bg-warning">Escritorio remoto</span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-video bg-maroon"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="fas fa-clock"></i> 5 days ago</span>

                        <h3 class="timeline-header"><a href="#">El software o aplicaciones para escritorio remoto son diversos, pero los más utilizados son:</a></h3>

                        <div class="timeline-body">
                          <a href="https://remotedesktop.google.com/?pli=1" target="_blank"><img src="img/social/chrom.jpg" height="120" alt="..."></a>
                          <a href="https://anydesk.com/es" target="_blank"><img src="img/social/anidesk.jpg" height="120" alt="..."></a>
                          <a href="https://www.teamviewer.com/es-mx/" target="_blank"><img src="img/social/team.png" height="120" alt="..."></a>
                          <a href="https://www.forticlient.com/downloads" target="_blank"><img src="img/social/foticlient.jpg" height="120" alt="..."></a>
                        </div>
                        
                      </div>
                    </div>
                   
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            
          </div>
  </div>
</div>

@endsection()