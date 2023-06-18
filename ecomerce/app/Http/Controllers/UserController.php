<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function store(Request $request){

        
        $user = new User();
        $user->nome = $request->input('nome');
        $user->cpf = $request->input('cpf');
        $user->senha = $request->input('senha');

        $validatedData = $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
        ]);
        
        $user->save();

        return redirect('/');
        
    }

    public function index()
    {
        $user = User::all();
        
        
        return response()->json($user);
    }

    public function validateUser(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|unique:posts|max:255',
            'cpf' => 'required',
            'senha' => 'required',
        ]);
    
    }
}