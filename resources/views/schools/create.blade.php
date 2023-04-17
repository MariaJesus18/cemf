@extends('layouts.master')


@section('layout-header')
<title>Escolas</title>
@endsection

@section('layout-content')

<form id="formAuthentication" class="mb-3" action="{{route('schools.store')}}" method="POST">
    @csrf
    <div class="container-xxl  ">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <h1 class="float-start">Adicionar Escola</h1>
            </div>
        </div>

    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <div class="mb-3">
                <label for="" class="form-label">Nome da Escola</label>
                <input type="text"
                class="form-control" name="name" id="" value="{{old('name')}}" required aria-describedby="helpId" placeholder="Nome da Escola">
            </div>
            <button class="btn btn-primary">Salvar</button>        
        </div>
    </div>

</form>

@endsection