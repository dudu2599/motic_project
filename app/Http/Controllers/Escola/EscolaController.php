<?php

namespace App\Http\Controllers\Escola;

use App\Inscricao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EscolaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dia = Inscricao::latest()->first();
        return view('escola.home', compact('dia'));
    }
}
