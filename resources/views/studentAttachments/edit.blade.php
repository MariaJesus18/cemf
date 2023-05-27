</html>
@extends('layouts.master')

@section('layout-header')
<title>Contas</title>
@endsection

@section('layout-content')

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">

        <form class="" action="{{ route('studentAttachments.update', $studentAttachment->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xl">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Titulo</label>
                            <input type="text" class="form-control" id="basic-default-company" placeholder="Nome" name="title" required>
                        </div>

                        <label for="user" class="form-label">Aluno</label>
                        <select name="student" id="student" class="form-select form-select-lg mb-3">
                            @foreach ($student as $students)
                            <option value="{{ $students->id }}">{{ $students->name }}</option>
                            @endforeach
                        </select>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">Observações</label>
                            <textarea id="basic-default-message" class="form-control" placeholder="Observações" name="observation" required></textarea>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>

    </div>
</div>

@endsection
