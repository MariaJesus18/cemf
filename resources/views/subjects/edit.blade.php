@extends('layouts.master')
@section('layout-header')
<title>subjects</title>
@endsection

@section('layout-content')
<div class="container-xxl  ">
    <form id="formAuthentication" class="mb-3" action="{{route('subjects.update',$subject->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="container-xxl  ">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col">
                    <h1 class="float-start">Disciplinas</h1>
                </div>
            </div>

            <div class="row justify-content-center align-items-center g-2">
                <div class="col">
                    <div class="mb-3">
                        <label for="" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name" id="" value="{{$subject->name}}" required aria-describedby="helpId" placeholder="Nome da Disciplina">
                    </div>
                    <button class="btn btn-primary">Atualizar</button>
                </div>
            </div>

    </form>
</div>
@endsection