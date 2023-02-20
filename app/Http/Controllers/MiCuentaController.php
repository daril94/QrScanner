<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiCuentaController extends Controller
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

        return view('theme.back.mi-cuenta.index');
    }
}
