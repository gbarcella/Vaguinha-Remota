<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $ultimasVagas = Vaga::orderBy('created_at', 'desc')->take(4)->get();

        return view('website.home', compact('ultimasVagas'));
    }

    public function sobre() {

        return view('website.sobre');
    }

    public function vagas() {

        return view('website.vagas');
    }

    public function publicarVaga() {

        return view('website.publicar-vaga');
    }
}
