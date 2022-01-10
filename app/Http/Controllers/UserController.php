<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function adicionar(){
        return view('formulario.index');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        if ($req->hasFile('foto')){
            $imagem = $req->file('foto');
            $num = rand(1111,9999);
            $dir = "img/fotos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['foto'] = $dir."/".$nomeImagem;
        }

        User::create($dados);

        return redirect()->route('usuarios');
    }
}
