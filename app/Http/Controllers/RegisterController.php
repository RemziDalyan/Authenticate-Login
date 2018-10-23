<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public  function store()
    {
      $this->validate(request(),[
        'name'=>'required',
        'surname'=>'required',
        'username'=>'required',
        'adress'=>'required',
        'password'=>'required',
      ]);
      $user = User::create(request(['name','surname','username','adress','password']));

      auth()->login($user);

      return redirect()->to('home');
    }
}
