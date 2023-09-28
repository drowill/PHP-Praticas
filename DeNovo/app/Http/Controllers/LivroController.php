<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function create () {
        return view('livros.create');
    }

    public function store () {
        return "pf da certo";
    }
}
