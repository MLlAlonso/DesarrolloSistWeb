<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;


use App\Models\usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('signUp');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:40|min:4',
            'apellidopaterno' => 'required|string|max:30|min:4',
            'apellidomaterno' => 'required|string|max:30|min:4',
            'email' => 'required|email|unique:usuarios|max:50',
            'pwd' => 'required|string|max:25|min:8|regex:/(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}/'
        ]);

        // Verificar el código de empleado y asignar el tipo de usuario correspondiente
        $tipoUsuario = $request->input('empleado') === 'seter576' ? 'Empleado' : 'Cliente';

        // Crear un nuevo usuario en la base de datos
        $usuario = new Usuario();
        $usuario->nombre = $request->input('nombre');
        $usuario->apellidoPaterno = $request->input('apellidopaterno'); 
        $usuario->apellidoMaterno = $request->input('apellidomaterno');
        $usuario->email = $request->input('email');
        $usuario->password = Hash::make($request->input('pwd')); // Utilizar Hash para cifrar la contraseña
        $usuario->save();

        // Redirigir o realizar otras acciones según tus necesidades
        return redirect()->route('index')->with('success', '¡Usuario registrado con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuario $usuario)
    {
        //
    }
}
