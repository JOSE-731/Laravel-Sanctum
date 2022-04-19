<?php

namespace App\Http\Controllers;

use App\Models\Datos;
use Illuminate\Http\Request;

class DatosController extends Controller
{
    public function index(){

        $data = Datos::all();

        return $data;

    }
}
