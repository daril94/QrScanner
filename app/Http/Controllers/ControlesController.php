<?php


namespace App\Http\Controllers;

use App\Console\Commands\Control;
use Illuminate\Support\Facades\Storage;

use App\Models\Controles;
use App\Models\Docs;
use App\Models\Etiqueta;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ControlesController extends Controller
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
        //
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
    public function crear(Request $request)
    {

        $qr = $request->input('qrdata');
        $data = DB::table('docs')->where('etiqueta', $qr)->first();

        $id =  DB::table('docs')->where('etiqueta', $qr)->value('id');
        // return $data;
        $controles = Controles::where('doc_id', $id)->paginate(10);
        //dd($controles);

        $foto = DB::table('images_initials')->where('doc_id', $id)->value('url');
        // dd($foto);
        //dd($data);
        return view('theme.front.etiqueta.cargar', compact('qr', 'data', 'foto', 'controles'));
    }

    public function observar(Request $request)
    {
        $qr = $request->input('qrdata');
        $data = DB::table('docs')->where('etiqueta', $qr)->first();

        $id =  DB::table('docs')->where('etiqueta', $qr)->value('id');
        // return $data;
        $controles = Controles::where('doc_id', $id)->paginate(10);
        //dd($controles);

        $foto = DB::table('images_initials')->where('doc_id', $id)->value('url');
        // dd($foto);
        return view('theme.front.etiqueta.control', compact('qr', 'data', 'foto', 'controles'));
    }
    public function listar(Request $request)
    {

        $texto = trim($request->get('texto'));


        $controles = DB::table('controles')
            ->select('id', 'etiqueta', 'fecha', 'ciudad', 'colaborador', 'tipoControl')
            ->where('etiqueta', 'LIKE', '%' . $texto . '%')->orderBy('etiqueta', 'asc')
            ->paginate(10);
        return view('theme.front.control.controles', compact('controles', 'texto'));
    }
    public function guardar(Request $request)
    {

        $request->validate([
            'file' => 'required|image|max:2048'
        ]);
        $imagen =  $request->file('file')->store('public/inicial');

        $url = Storage::url($imagen);


        //  dd($request);
        Controles::create([
            'doc_id' => $request->input('id'),
            'user_id' => $request->input('iduser'),
            'etiqueta' => $request->input('etiqueta'),
            'imagen' => $url,
            'qr' => $request->input('etiqueta'),
            'fecha' => $request->input('fecha'),
            'denominacion' => $request->input('denominacion'),
            'observaciones' => $request->input('observaciones'),
            'ciudad' => $request->input('ciudad'),
            'colaborador' => $request->input('colaborador'),
            'tipoControl' => $request->input('tipoControl')

        ]);

        return redirect()->route('etiqueta.leer');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function seleccionar(Request $request)
    {
        $id = trim($request->get('id'));

        $controles = Controles::where('id', $id)->paginate(10);
        $etiqueta = DB::table('controles')->where('id', $id)->value('etiqueta');
       // return($controles);
        return view('theme.front.control.seleccionar', compact('controles', 'etiqueta'));
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
