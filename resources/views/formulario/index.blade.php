@extends('layout.site')

@section('titulo','Formulário')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Curso</h3>
        <div class="row">
            <form class="" action="{{route('formulario.salvar')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('formulario._form')
                <button class="btn deep-orange">Salvar</button>
            </form>
        </div>
    </div>




@endsection
