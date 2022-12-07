<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class PagesController extends Controller
{
    //PORTADA - BIENVENIDA - PARA EL PUBLICO GENERAL
    public function  fnIndex () {
        return view('welcome');
    }

    public function  fnEstDetalle($id) {
        $xDetAlumnos = Estudiante::findOrFail($id);
        return view('Estudiante.pagDetalle',compact('xDetAlumnos'));
    }

    //READ
    public function  fnLista() {
        $xAlumnos = Estudiante::all();
        return view('pagLista',compact('xAlumnos'));
    }

    //////////////////// CREATE ///////////////////////////////////
    public function fnRegistrar(Request $request){

        //return $request->all();         //Prueba de "token" y datos recibidos
    
        $request ->validate([
            'codEst' => 'required',
            'nomEst' => 'required',
            'apeEst' => 'required',
            'fnaEst' => 'required',
            'turMat' => 'required',
            'semMat' => 'required',
            'estMat' => 'required'
        ]);
    
        $nuevoEstudiante = new Estudiante;
        $nuevoEstudiante->codEst = $request->codEst;
        $nuevoEstudiante->nomEst = $request->nomEst;
        $nuevoEstudiante->apeEst = $request->apeEst;
        $nuevoEstudiante->fnaEst = $request->fnaEst;
        $nuevoEstudiante->turMat = $request->turMat;
        $nuevoEstudiante->semMat = $request->semMat;
        $nuevoEstudiante->estMat = $request->estMat;
            
        $nuevoEstudiante->save();
            
        //$xAlumnos = Estudiante1::all();                      //Datos de BD
        //return view('pagLista', compact('xAlumnos'));        //Pasar a pagLista
        return back()->with('msj','Se registro con éxito...'); //Regresar con msj
    }














   public function  fnGaleria($numero=0) {
        //return view('Foto de codigo;' .$numero);
       return view('pagGaleria',['valor' => $numero, 'otro'=>25]);
    }
}
