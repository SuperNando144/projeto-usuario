@extends('layout.site')

@section('titulo', 'Usuários')

@section('conteudo')
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Sexo</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->nome_completo}}</td>
                    <td>{{$usuario->idade}}</td>
                    <td>{{$usuario->sexo}}</td>
                    <td><img src="{{asset($usuario->foto)}}"></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <a href="{{route('formulario')}}" class="btn blue">Adicionar</a>
    </div>
@endsection
