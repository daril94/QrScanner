<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Http\Requests\Backend\ValidacionUsuario;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('theme.front.dashboard.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('theme.back.usuario.crear');
    }
    public function listar()
    {

       $usuarios =  Usuario::all();
        return view('theme.back.usuario.listar', compact('usuarios'));
    }

    public function guardar(Request $request)
    {

        return Usuario::create([
            'nombre' => $request->input('nombre'),
            'usuario' => $request->input('usuario'),
            'email' => $request->input('email'),
            'area' => $request->input('area'),
            'password' => Hash::make($request->input('password')),
            'rol' => $request->input('rol'),
            'estado' => 1


        ]);
        /*
        $request->validate([
            'nombre' => 'required',
            'usuario' => 'required' ,
            'email' => 'required' ,
            'area' => 'required',
            'rol' => 'required',
            'password' => 'required',


        ]);


        Usuario::create($request->all());


*/
        // $validado = $request->validated();
        // return ($validado);
        //  Usuario::create($validado);
        return redirect()->route('mi-cuenta');
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
