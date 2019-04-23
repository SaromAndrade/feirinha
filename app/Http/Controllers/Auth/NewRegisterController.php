<?php

namespace App\Http\Controllers\Auth;
use App\login;
use App\usuario;
use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function validateform(Request $request) {
   //   print_r($request->all());
      $this->validate($request,[
         'email'=>'required|string|email|max:255|unique:users',
         'password'=>'required|string|min:6',
         'passwordconfirmed'=>'required|string|min:6|same:password',
         'name'=>'required|string|max:255',
         'data_nasc'=>'required',
         'cpf'=>'required|string'
         
      ]);
   }

    public function createLogin(Request $request, login $login, usuario $usuario)
    {	
     $this->validateform($request);
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
