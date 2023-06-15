@extends('layouts.master')

@section('layout-header')
<title>Estudantes</title>
@endsection

@section('layout-content')

<form id="formAuthentication" class="mb-3" action="{{ route('historicalNotes.update',  $historicalnote->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="contract" class="form-label">Periodo</label>
        <select class="form-select" id="period_id" aria-label="Default select example" name="period_id">
            @foreach ($periods as $period)
            <option value="{{ $period->id}}">
                {{ $period->title }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="contract" class="form-label">Serie</label>
        <select class="form-select" id="serie_id" aria-label="Default select example" name="serie_id">
            @foreach ($series as $serie)
            <option value="{{ $serie->id}}">
                {{ $serie->name }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="year" class="form-label">Ano </label>
        <input type="text" class="form-control " id="year" name="year" placeholder="Valor" autofocus />
    </div>
    <div class="mb-3">
        <label for="value" class="form-label">Valor </label>
        <input type="text" class="form-control " id="note" name="note" placeholder="Valor" autofocus />
    </div>
    <div class="mb-3">
        <label for="subjects" class="form-label">Disciplina</label>
        <select class="form-select" id="subject" aria-label="Default select example" name="subject_id">
            @foreach ($subjects as $subject)
            <option value="{{ $subject->id}}">
                {{ $subject->name }}
            </option>
            @endforeach
        </select>
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
<!-- /modal -->
</div>
</div>


<div class="row ">
    <div class="col-8">
        <form action="" class="form-group ">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                <input type="text" class="form-control" placeholder="Buscar estudante..." aria-describedby="button-addon1">
            </div>
        </form>

        @endsection