<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Especialidade", 'rota' => "especialidades.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') Especialidade @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">
            <x-datalist 
                title="Especialidade" 
                crud="especialidades" 
                :header="['id', 'nome', 'descricao', 'ações']" 
                :data="$dados"
                :hide="[true, false, true, false]" 
            /> 
        </div>
    </div>
@endsection