@extends('layouts.master')
@section('layout-header')
<title>Tipo de lancamentos</title>
@endsection

@section('layout-content')
<div class="container-xxl  ">
    <form id="formAuthentication" class="mb-3" action="{{route('typeReleases.update',$typeRelease->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="container-xxl  ">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col">
                    <h1 class="float-start">tipo Lancamneots</h1>
                </div>
            </div>

            <div class="row justify-content-center align-items-center g-2">
                <div class="col">
                    <div class="mb-3">
                        <label for="" class="form-label">Titulo</label>
                        <input type="text" class="form-control" name="title" id="" value="{{$typeRelease->title}}" required aria-describedby="helpId" placeholder="Titulo">
                    </div>
                    @error('title')
                        <span class="badge bg-warning">{{$message}}</span>
                    @enderror
                    <button class="btn btn-primary">Atualizar</button>
                </div>
            </div>

    </form>
</div>
@endsection