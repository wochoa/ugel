<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Http;

class noticias extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()// todas las noticias para la secion homke
    {
        
        $enlace = "http://".request()->server('HTTP_HOST');
        
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        $direccionweb=$portalesweb;//$portalesweb[0]->iddirecciones_web;

        $publicacion=DB::table('noticias')->where(['activo'=>1,'iddirecciones_web'=>$direccionweb])->orderBy('idnoticias','DESC')->limit(10)->get();
        $popup=DB::table('popup')->where(['iddirecciones_web'=>$direccionweb,'activogral'=>1])->orderByRaw('idpopup DESC')->get();
        $seccion=DB::table('secciones')->where(['activo'=>1,'iddirecciones_web'=>$direccionweb])->orderBy('idseccion','DESC')->get();

        $ereferencial=DB::table('enlacerefe')->where(['activo_refe'=>1,'iddirecciones_web'=>$direccionweb])->orderBy('idenlacerefe','ASC')->get()->toArray();

        
        


        return view('inicio',compact('publicacion','popup','seccion','ereferencial'));
        // print_r($publicacion);
    }
    public function todo()// todas las noticias para la seccion de  mas noticias
    {   $enlace=substr(request()->url(),0,-12);
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');

        $direccionweb=$portalesweb;//$portalesweb[0]->iddirecciones_web;//3;// 3: direccion regional de educacion -> este dato se saco del registyro de bd de direcciones_web

        $publicacionall=DB::table('noticias')->where(['activo'=>1,'iddirecciones_web'=>$direccionweb])->orderBy('idnoticias','DESC')->paginate(6);

        return view('allnoticias',compact('publicacionall'));//view('inicio',compact('publicacion'));
        //return $enlace;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data=Http::get('http://127.0.0.1:8000/noticias/'.$id);
        // $detallenoticia=array_reverse(json_decode($data,true));
        // return view('detallenoticia',compact('detallenoticia'));

        $detallenoticia=DB::table('noticias')->where('idnoticias',$id)->first();

        return view('detallenoticia',compact('detallenoticia'));
        //return json_encode($detallenoticia);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
