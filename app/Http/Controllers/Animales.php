<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Animales extends Controller
{
    public function getAnimales(){
        $animales = ['Takeli','Leon','Gazella','Hiena','Simba'];
        return response()->json(['mensaje' => 'Estos son animales','datos' => $animales]);

    }
}
