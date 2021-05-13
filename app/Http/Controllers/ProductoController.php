<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function create(){
        return view('producto.create');
    }

    public function store(Request $request){

        $data = request()->except('_token');

        $nombre = $_POST['Nombre'];
        $Fecha_de_Entrada = $_POST['FechaE'];
        $Fecha_de_Salida = $_POST['FechaL'];

        DB::insert("INSERT INTO producto (Nombre,Fecha_de_Entrada,Fecha_de_Salida) VALUES ('$nombre','$Fecha_de_Entrada','$Fecha_de_Salida')");



        //return $data;
        //docente::insert($data);
        //return view("/docente/create");
        //response()->json($data);
        //$resul = "Registrado Exitosamente";
        return view('producto.create');
    }
    public function index(){

        $datosD['doc'] = DB::select('select * from producto');
        //$datosD['doc'] = DB::select('SELECT d.Id, Email, Pass, d.Nombre, Apellido, Telefono, c.Nombre as curso,tipoUsuario
        //FROM docente as d inner join curso as c on d.Id_curso=c.Id;');

        //dd($datosD);
       return view('producto.index',$datosD);
        //return $datosD;

    }
}
