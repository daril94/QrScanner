<?php

namespace App\Http\Controllers;

use App\Models\Controles;
use App\Models\Docs;
use App\Models\Etiqueta;
use App\Models\ImagesInitials;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EtiquetaController extends Controller
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
        $documentos = Docs::all();
        return view('theme.front.etiqueta.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function elegir()
    {
        $herramientas = Docs::all();

        return view('theme.front.etiqueta.elegir', compact('herramientas'));
    }

    public function reponer()
    {
        $herramientas = Docs::all();

        return view('theme.front.etiqueta.reponer', compact('herramientas'));
    }

    public function crear(Request $request)
    {
        $herramienta = $request->input('idHerramienta');

        // $usuarios = DB::table('docs')
        //  ->select('id', 'asignadoa', 'fecha')
        //   -> where('etiqueta','=', $herramienta );



        $usuario = DB::table('docs')->where('etiqueta', $herramienta)->value('asignadoa');

        $fecha = DB::table('docs')->where('etiqueta', $herramienta)->value('fecha');
        $id = DB::table('docs')->where('etiqueta', $herramienta)->value('id');

        return view('theme.front.etiqueta.crearQR', compact('herramienta', 'usuario', 'fecha', 'id'));
    }

    public function recrear(Request $request)
    {
        $herramienta = $request->input('idHerramienta');

        // $usuarios = DB::table('docs')
        //  ->select('id', 'asignadoa', 'fecha')
        //   -> where('etiqueta','=', $herramienta );



        $usuario = DB::table('docs')->where('etiqueta', $herramienta)->value('asignadoa');

        $fecha = DB::table('docs')->where('etiqueta', $herramienta)->value('fecha');
        $id = DB::table('docs')->where('etiqueta', $herramienta)->value('id');

        return view('theme.front.etiqueta.recrearQR', compact('herramienta', 'usuario', 'fecha', 'id'));
    }

    public function leer()
    {
        $herramientas = Docs::all();

        return view('theme.front.etiqueta.leerQR', compact('herramientas'));
    }

    public function leerC()
    {
        $herramientas = Docs::all();

        return view('theme.front.etiqueta.leerQRC', compact('herramientas'));
    }

    public function listar()
    {
        $herramientas = Docs::all();

        return view('theme.front.etiqueta.listar', compact('herramientas'));
    }
    /**
     * Cargar a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function enviar(Request $request)
    {
        /* $request->validate([
            'file' => 'required|image|max:2048'
        ]);
        $imagenes = $request->file('file')->store('public/imagenes');

        $url = Storage::url($imagenes);

        return $request['etiqueta'];

        return Controles::create([
            'etiqueta' => $request['etiqueta'],
            'imagen' => $url,
            'fecha' => $request['fecha'],
            'tipoControl' => $request['tipoControl'],
            'obseraciones' => $request['obseraciones'],
            'estado' => 1

        ]);

          $table->string('etiqueta');
             $table->imagen('imagen');
                     $table->date('fecha');
             $table->string('obseraciones');
             $table->string('tipoControl'); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etiqueta  $etiqueta
     * @return \Illuminate\Http\Response
     */
    public function show(Etiqueta $etiqueta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etiqueta  $etiqueta
     * @return \Illuminate\Http\Response
     */
    public function edit(Etiqueta $etiqueta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etiqueta  $etiqueta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etiqueta $etiqueta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etiqueta  $etiqueta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etiqueta $etiqueta)
    {
        //
    }
}
