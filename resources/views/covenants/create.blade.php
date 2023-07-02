@extends('layouts.master')


@section('layout-header')
<title>Convênios</title>
@endsection

@section('layout-content')

<form id="formAuthentication" class="mb-3" action="{{route('covenants.store')}}" method="POST">
    @csrf
    <div class="container-xxl  ">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <h1 class="float-start">Adicionar Convênio</h1>
            </div>
        </div>

    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <div class="mb-3">
                <label for="" class="form-label">Convênio</label>
                <input type="text"
                class="form-control" name="name" id="" value="{{old('name')}}" required aria-describedby="helpId" placeholder="Nome do Convênio">
                @error('name')
                    <span class="badge bg-warning">{{$message}}</span>
                @enderror

            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="" class="form-label">Desconto</label>
                    <input type="text"
                    class="form-control" name="discount" id="" value="{{old('discount')}}" required aria-describedby="helpId" placeholder="Desconto">
                    @error('discount')
                        <span class="badge bg-warning">{{$message}}</span>
                    @enderror
                </div>
            <button class="btn btn-primary">Salvar</button>        
        </div>
    </div>

</form>

@endsection