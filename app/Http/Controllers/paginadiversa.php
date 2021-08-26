<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Http;
use PDF;
class paginadiversa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //cargados el directorio regional
        $directorio=DB::table('directorio_regional')->get();
        return view('directorio',compact('directorio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function visitas()
    {
        //carga las visitas
        $visitas=DB::table('regvisita')->join('cargo_vista','regvisita.ofi_codigo','=','cargo_vista.ofi_codigo')->orderByRaw('idregvisita DESC')->paginate(10);
        return view('visitas',compact('visitas'));
        //var_dump($visitas);
    }

    public function telefonos()
    {
        //cargados el directorio regional
        $telefonico=DB::table('directorio_regional')->get();
        return view('directoriotelefobico',compact('telefonico'));
    }
    
    public function organigrama()
    {
        //cargados el directorio regional
        $data=DB::table('oficina')->select('ofi_codigo','ofi_nombre','cargo_representante')->get();

        return view('organigrama',compact('data'));
        //print_r($data);
    }
    public function convocatoria()
    {
        //cargados el directorio regional
        $data=DB::table('archivo_sel_cas')->join('cas_proceso_seleccion','archivo_sel_cas.id_proceso_selec','=','cas_proceso_seleccion.id_proc_sel_cas')->where('cas_proc_sel_uni_eje',1)->orderByRaw('id_proc_sel_cas DESC')->get();

        return view('convocatoria',compact('data'));
        //print_r($data);
    }

    public function funcionario($id)
    {
       $sql="SELECT of.ofi_nombre,(SELECT dep.ofi_nombre FROM oficina AS dep WHERE dep.ofi_codigo = of.oficina_superior)as oficina_superior, cr.car_descripcion, cr.car_telefono, cr.car_anexo, funcionario.fun_usuario, funcionario.fun_nombres, funcionario.fun_correo, funcionario.fun_telefonos FROM oficina AS of INNER JOIN cargo AS cr ON of.cargo_representante = cr.car_codigo INNER JOIN asignacion ON asignacion.cargo_codigo = cr.car_codigo INNER JOIN funcionario ON asignacion.funcionario_fun_cod = funcionario.fun_cod WHERE asignacion.asi_estado=1 AND of.ofi_codigo =".$id;

        $datafunc=DB::select($sql);
       
        foreach($datafunc as $func)
        {
            $oficina=@utf8_encode($func->ofi_nombre);  
            $cargo=$func->car_descripcion;         
            $ofisuperior=$func->car_descripcion;
            $telefono=$func->car_telefono;
            $anexo=$func->car_anexo;
            $usuario=$func->fun_usuario;
            $nombre=utf8_encode($func->fun_nombres);
            $correo=$func->fun_correo;
            $telefonos=utf8_encode($func->fun_telefonos);
            


        }

        $datofun=array('oficina' => $oficina,'cargo' => $cargo,'ofisuperior' => $ofisuperior,'telefono' => $telefono,'anexo' => $anexo,'usuario' => $usuario,'nombre' => $nombre,'correo' => $correo,'telefonos' => $telefonos );

        // if(count($datafunc)>=1)
        // {
        // echo'<table class="table table-bordered table-hover table-sm">
        //     <tr><td><strong>OFICINA<strong></td><td>'.$oficina.'</td></tr>
        //     <tr><td><strong>CARGO<strong></td><td>'.$cargo.'</td></tr>
        //     <tr><td><strong>TELÉFONO<strong></td><td>'.$telefono.'</td></tr>
        //     <tr><td><strong>ANEXO<strong></td><td>'.$anexo.'</td></tr>
        //     <tr><td><strong>USUARIO<strong></td><td>'.$usuario.'</td></tr>
        //     <tr><td><strong>NOMBRE<strong></td><td>'.$nombre.'</td></tr>
        //     <tr><td><strong>CORREO<strong></td><td>'.$correo.'</td></tr>
        //     <tr><td><strong>CELULAR<strong></td><td>'.$telefonos.'</td></tr>
        //     </table>';
        // }

        //return $nuevodata;//view('datafunc',compact('datafunc'));
        return $datofun;
        //print_r($datafunc);
        //echo $datafunc['ofi_nombre'];


    }

    public function publicaciones()
    {
        //$publicacion=DB::table('popup')->where('iddirecciones_web',11)->orderBy('idpopup','desc')->get();
        return view('publicaciones');
    }

    public function anuncios()
    {
        $publicacion=DB::table('popup')->where('iddirecciones_web',11)->orderBy('idpopup','desc')->get();
        return view('anuncios',compact('publicacion'));
    }

    public function procompite()
    {
        $provincia=DB::table('ubprovincia')->where('idDepa','10')->get();
        return view('procompite',compact('provincia'));
    }

    public function lisdistrito($id)
    {
        $provincia=DB::table('ubdistrito')->where('idProv',$id)->get();
        return $provincia;

    }

    public function cadena($id)
    {
        $cadena=DB::table('cadenaproductiva')->where('idprov',$id)->get();
        return $cadena;
    }



    public function verpagina($id)
    {
        $datpagina=DB::table('pagina')->where('id_pagina',$id)->get();

        return view('pagina',compact('datpagina'));

    }

    public function listamenus()
    {
        $enlace = "http://".request()->server('HTTP_HOST');

        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->get();
        $direccionweb=$portalesweb[0]->iddirecciones_web;//3;// 3: direccion regional de educacion -> este dato se saco del registyro de bd de direcciones_web
        $nombredireccionweb=$portalesweb[0]->nom_direcciones_web;

        $menus=DB::table('menus')->where(['iddirecciones_web'=>$direccionweb,'activo_menu'=>1])->orderBy('idmenus','ASC')->get();

        return $menus;
    }
    public function listasubmenu()
    {
        $datsubmenu=DB::table('submenu')->join('menus','submenu.idmenus','=','menus.idmenus')->where('activo_submenu',1)->orderBy('submenu.idmenus','ASC')->get();

        foreach($datsubmenu as $sub)
        {
          $idsubmenu=$sub->idsubmenu;//0
          $nom_submenu=utf8_encode($sub->nom_submenu);//0
          $link_submenu=$sub->link_submenu;//0
          $idpagina=$sub->idpagina;//0
          $idmenus=$sub->idmenus;//0


          $submenu[]=array('idsubmenu'=>$idsubmenu,'nom_submenu'=>$nom_submenu,'link_submenu'=>$link_submenu,'idpagina'=>$idpagina,'idmenus'=>$idmenus);


        }


       return $submenu;
    }

    public function tema()
    {   $dnsserver="https://gestionportales.regionhuanuco.gob.pe";

        $enlace = "http://".request()->server('HTTP_HOST');
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->get();
        $direccionweb=$portalesweb[0]->iddirecciones_web;//3;// 3: direccion regional de educacion -> este dato se saco del registyro de bd de direcciones_web
        $nombredireccionweb=$portalesweb[0]->nom_direcciones_web;

        $tema=DB::table('tema_portal')->where('iddirecciones_web',$direccionweb)->get();
        
        $tmcolor_tema=$tema[0]->color_tema;
        $tmlogo_tema=$tema[0]->logo_tema;
        $tmtop_email=$tema[0]->top_email;
        $tmtop_fono=$tema[0]->top_fono;
        $tmtop_correocorp=$tema[0]->top_correocorp;
        $tmtop_transparencia=$tema[0]->top_transparencia;
        $tmtop_mesapartesvirtual=$tema[0]->top_mesapartesvirtual;
        $tmfooter_f1=utf8_encode($tema[0]->footer_f1);
        $tmfooter_f2=utf8_encode($tema[0]->footer_f2);
        $tmfooter_f3=utf8_encode($tema[0]->footer_f3);
        $tmredes_sociales=utf8_encode($tema[0]->redes_sociales);
        $linkfacebook=$tema[0]->linkpag_facebook;
        $favicon=$tema[0]->favicon;

 
        

        $submenu=array('tmcolor_tema'=>$tmcolor_tema,'tmlogo_tema'=>$tmlogo_tema,'tmtop_email'=>$tmtop_email,'tmtop_fono'=>$tmtop_fono,'tmtop_correocorp'=>$tmtop_correocorp,'tmtop_transparencia'=>$tmtop_transparencia,'tmtop_mesapartesvirtual'=>$tmtop_mesapartesvirtual,'tmfooter_f1'=>$tmfooter_f1,'tmfooter_f2'=>$tmfooter_f2,'tmfooter_f3'=>$tmfooter_f3,'tmredes_sociales'=>$tmredes_sociales,'tmredes_linkface'=>$linkfacebook,'favicons'=>$favicon,'nombredireccionweb'=>$nombredireccionweb,'dnsserver'=>$dnsserver);

        return $submenu;

    }
}
