<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios=$request->all();
        $email = DB::table('Usuarios')->where('Email', $usuarios['Email'])->first();
        if(empty($usuarios['Nombre']) || empty($usuarios['Apellido'])) {
            return view('registrar', ['mensaje'=>'Rellene todos los campos']);
        }
        if ($email) {            
            return view('registrar',['mensaje'=> 'Este email ya ha sido registrado. Inicie sesión.']);       
        }            
        DB::insert('insert into usuarios values (?,?,?,?, ?)', [NULL, $usuarios['Nombre'], $usuarios['Apellido'], $usuarios['Email'],$usuarios['Pass']]);
        $mensaje= 'REGISTRADO '.$usuarios['Nombre'];
        return $mensaje;

    }

    // Funcion para validar datos de ingreso
    public function validarForm(Request $request){
        $usuarios=$request->all();
        if(empty($usuarios['Email']) || empty($usuarios['Pass'])){
            return view('ingresar', ['mensaje'=> 'No deje campos en blanco']);
        }
        $email = DB::table('Usuarios')->where('Email', $usuarios['Email'])->first();
        $contra=  DB::table('Usuarios')->where('Pass', $usuarios['Pass'])->first();
        if (!$email || !$contra) {
            return view('ingresar', ['mensaje'=>'Email o Contraseña incorrecta']);
        }        
        $nomEmail=$email->Nombre;
        return view('ingresar', ['bienvenido'=>'Bienvenido '.$nomEmail]);
        
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuarios $usuarios)
    {
        //
    }
}
