<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Animal;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/animais')->name('animais')->group(function () {
    Route::get('', function () {
        $animais = Animal::all();
    
        return $animais;
    });
    
    Route::post('', function () {
        $nome = request()->get('nome');
        $peso = request()->get('peso');
        $animal = Animal::create(
            ['nome' => $nome, 
            'peso' => $peso]
        );
        $corpo = ['location' => route('animais.show', $animal->id)];
        return response($corpo, 201);
    });

    Route::name('.show')->get('/{id}', function ($id) {
        $animal = Animal::find($id);
        if ($animal) 
            return $animal;
        else 
            return response('', 404);
        
    });

    Route::delete('/{id}', function ($id) {
        $animal = Animal::find($id);
        if ($animal)
            $animal->delete();
        else 
            return response('', 404);
    });

    Route::put('/{id}', function ($id) {
        $animal = Animal::find($id);
        if (!$animal)
            return response('', 404);
        $nome = request()->input('nome');
        if ($nome)
            $animal->nome = $nome;
        $peso = request()->input('peso');
        if ($peso)
            $animal->peso = $peso;
        $animal->save();
    });
});
