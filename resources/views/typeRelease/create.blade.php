@extends('layouts.master')
@section('layout-header')
    <title>Tipo de lancamentos</title>
@endsection

@section('layout-content')
    <div class="container-xxl  ">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <h1 class="float-start">Tipo de Lancamentos</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center g-2 mb-3">
            <div class="col">

                <div class="container-xxl">
                    <div class="authentication-wrapper authentication-basic container-p-y">
                        <form class="mb-3" action="{{route('typeReleases.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nome" class="form-label">Titulo</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
