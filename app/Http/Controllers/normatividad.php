<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class normatividad extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index($text,$anio)
    {
        if($text<>0 or $anio<>0){
           $normatividad=DB::table('regulation')->where(['reg_status'=>1,'reg_type'=>$text,'reg_year'=>$anio])->orderByRaw('reg_year DESC')->get();
           $datocapturados=array('tipobus' =>$text ,'tipanio' =>$anio  ); 
        }
        else{
            $normatividad=DB::table('regulation')->where('reg_status',1)->orderByRaw('reg_year - reg_type DESC')->limit(20)->get();
            $datocapturados=array('tipobus' =>'Acuerdo%20de%20Consejo' ,'tipanio' =>0  );
        }
        
        session(['key' => 'value']);

        
        $tipodoc=DB::table('regulations_tipo')->orderByRaw('tip_description ASC')->get();
        
   return view('normatividad',compact('normatividad','tipodoc','datocapturados'));
   // echo $text;
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tiposdoc()
    {
        //SELECT *FROM regulations_tipo ORDER BY regulations_tipo.tip_description ASC
            // $publicacion=DB::table('regulations_tipo')->orderByRaw('tip_description ASC')
            // return view('inicio',compact('publicacion'));
    }
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
        //
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
