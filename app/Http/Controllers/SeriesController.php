<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;


use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->get();

        return view('series.index')->with('series', $series);
    }

    public function create(){
        return view('series.create');
    }

    // vantagem: é muito sipple de usar tendo somente uma classe
    // desvantagem: a modelagem do dominio fica menos espressiva
    public function store(Request $request){
        $nomeSerie = $request->input('nome');
        // pego o nome da série do formulário e salvo no banco de dados
        //Serie é um modelo que representa a tabela series no banco de dados
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();
        return redirect('/series');
    }

}
