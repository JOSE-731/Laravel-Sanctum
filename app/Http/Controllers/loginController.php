<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importamos el modelo user ya que ese es con el que vamos a iniciar sesion
use App\Models\User;

//Clase de laravel para manejar inicio de sesion
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    // Metodo que recibe el formulario
  public function login(Request $request)
  {
    $this->validateLogin($request);

    // Login true

    // Login false

  }

  // Metodo que verifica que llegue la informacion correctamente
  public function validateLogin(Request $request)
  {
    return $request->validate([
      'email' => 'required|email',
      'password' => 'required',
      'name' => 'required'
    ]);
  }
}
