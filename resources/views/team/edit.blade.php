@extends('layouts.master')
@section('layout-header')
<title>Equipe</title>
@endsection

@section('layout-content')
<div class="container-xxl  ">


    <form class="mb-3" action="{{route('teams.update', $team->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="input-field col s3">

                <label for="unit" class="form-label">Unidade</label>
                <select name="unit_id" id="units" class="form-select form-select-lg mb-3">

                    @foreach ($unit as $units)
                    <option value="{{ $units->id }}">{{ $units->name }}
                    </option>
                    @endforeach
                </select>
                <label for="user" class="form-label">Membro</label>
                <select name="user_id" id="units" class="form-select form-select-lg mb-3">

                    @foreach ($user as $users)
                    <option value="{{ $users->id }}">{{ $users->name }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>
</div>
@endsection