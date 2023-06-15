@extends('layouts.master')


@section('layout-header')
<title>Modalidades</title>
@endsection

@section('layout-content')

<form id="formAuthentication" class="mb-3" action="{{route('modalitys.update',$modality->id)}}" method="POST">
    @csrf
    @method('put')
    <div class="container-xxl">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <h1 class="float-start">Modalidade</h1>
            </div>
        </div>

    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <div class="mb-3">
                <label for="" class="form-label">Nome da Modalidade</label>
                <input type="text"
                class="form-control" name="name" id="" value="{{$modality->name}}" required aria-describedby="helpId" placeholder="Nome da Modalidade" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Tipo de Ocorrência</label>
                <select class="form-select form-select-lg" name="occurrencetype" id="" required>
                    <option value="{{$modality->id}}">{{$modality->occurrencetype}}</option>
                    <option value="Bimestral">Bimestral</option>
                    <option value="Semestral">Semestral</option>
                    <option value="Trimestral">Trimestral</option>
                </select>
            </div>
    
            <button class="btn btn-primary">Salvar</button>        
        </div>
    </div>

</form>

@endsection