@extends('layouts.master')


@section('layout-header')
<title>Escolas</title>
@endsection

@section('layout-content')

<form id="formAuthentication" class="mb-3" action="{{route('schools.update',$school->id)}}" method="POST">
    @csrf
    @method('put')
    <div class="container-xxl  ">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <h1 class="float-start">Adicionar Escola</h1>
            </div>
        </div>

    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <div class="mb-3">
                <label for="" class="form-label">{{$school->name}}</label>
                <input type="text"
                class="form-control" name="name" id="" value="{{$school->name}}" required aria-describedby="helpId" placeholder="Nome da Escola">
            </div>
            <button class="btn btn-primary">Salvar</button>        
        </div>
    </div>

</form>

@endsection