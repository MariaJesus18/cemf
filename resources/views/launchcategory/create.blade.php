@extends('layouts.master')


@section('layout-header')
<title>Categorias de Lançamento</title>
@endsection

@section('layout-content')

<form id="formAuthentication" class="mb-3" action="{{route('lcategories.store')}}" method="POST">
    @csrf
    <div class="container-xxl  ">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <h1 class="float-start">Adicionar Categoria de Lançamento</h1>
            </div>
        </div>

    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <div class="mb-3">
                <label for="" class="form-label">Título da Categoria</label>
                <input type="text"
                class="form-control" name="title" id="" value="{{old('title')}}" required aria-describedby="helpId" placeholder="Título da Categoria" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Tipo de Categoria</label>
                <select class="form-select form-select-lg" name="categoryType" id="" required>
                    <option selected>Selecione uma</option>
                    <option value="Pai">Pai</option>
                    <option value="Filho">Filho</option>
                </select>
            </div>
    
            <button class="btn btn-primary">Salvar</button>        
        </div>
    </div>

</form>

@endsection