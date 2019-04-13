<?php

namespace App\Http\Controllers;
use App\login;
use App\usuario;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function createLogin(Request $request, login $login, usuario $usuario)
    {	
    	$login->email= $request->email; 
    	$login->password= $request->password;
    	$login->remember_token= $request->_token;
      	$login->save();
      	$usuario->name= $request->name;
      	$usuario->data_nasc= $request->data_nasc;
      	$usuario->cpf= $request->cpf;
      	$usuario->idlogin = $login->id;
      	$usuario->avaliacao = 0;
      	$usuario->save(); 

      	return redirect('/'); 
    }

}
