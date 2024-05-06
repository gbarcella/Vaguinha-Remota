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
}
