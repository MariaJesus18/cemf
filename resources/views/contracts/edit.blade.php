@extends('layouts.master')

@section('layout-header')
    <title>Contas</title>
@endsection

@section('layout-content')
    <form id="formAuthentication" class="mb-3" action="{{ route('contracts.update', $contract->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container-xxl  ">
            <div class="card-body mb-3">
                <h1 class="float-start">#123 - Maria de Jesus </h1>

            </div>
        </div>

        <div class="container-xxl">
            <div class="authentication-wrapper authentication-basic container-p-y">

                <div class="card mb-4">
                    <div class="card-header">
                        <button type="submit" name="effect" id="effect" class="btn btn-success float-end">Efetivar
                            Matricula +</button>
                        <button type="submit" name="save" id="save" class="btn float-end"
                            style="background-color: rgb(245, 238, 238)">Salvar</button>
                    </div>
                    <div class="row">

                        <!-- Edit -->

                        <div class="col-xl">

                            <div class="card-body">


                                <div class="mb-3">
                                    <label for="covenants" class="form-label">Aluno</label>
                                    <select class="form-select" id="student_id" aria-label="Default select example"
                                        name="student_id">
                                        @foreach ($student as $students)
                                            <option value="{{ $students->id }}">
                                                {{ $students->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="covenants" class="form-label">Convênio</label>
                                    <select class="form-select" id="covenant_id" aria-label="Default select example"
                                        name="covenant_id">
                                        @foreach ($covenant as $covenants)
                                            <option value="{{ $covenants->id }}">
                                                {{ $covenants->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">

                                    <div class="d-inline-block">
                                        <label for="value" class="form-label">Valor</label>
                                        <input type="text" class="form-control " id="value" name="value"
                                            placeholder="Valor" autofocus />
                                    </div>
                                    <div class="d-inline-block">
                                        <label for="discount" class="form-label">Desconto</label>
                                        <input type="text" class=" form-control  " id="discount" name="discount"
                                            placeholder="Desconto" autofocus />
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="school" class="form-label">Escola</label>
                                    <select class="form-select" id="school_id" aria-label="Default select example"
                                        name="school_id">
                                        @foreach ($school as $schools)
                                            <option value="{{ $schools->id }}">
                                                {{ $schools->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="due_date" class="form-label">Data do 1°
                                        Vencimento</label>
                                    <input type="date" name="firstpaymentdate">
                                </div>
                                <div class="mb-3">
                                    <label for="responsible" class="form-label">Responsavel pelo
                                        pagamento</label>
                                    <select class="form-select" id="responsible_id" aria-label="Default select example"
                                        name="responsible_id">
                                        @foreach ($responsible as $responsibles)
                                            <option value="{{ $responsibles->id }}">
                                                {{ $responsibles->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="modality" class="form-label">Modalidade</label>
                                    <select class="form-select" id="modality_id" aria-label="Default select example"
                                        name="modality_id">
                                        @foreach ($modality as $modalitys)
                                            <option value="{{ $modalitys->id }}">
                                                {{ $modalitys->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="shift" class="form-label">Turno</label>
                                    <select class="form-select" id="shift_id" aria-label="Default select example"
                                        name="shift_id">
                                        @foreach ($shift as $shifts)
                                            <option value="{{ $shifts->id }}">
                                                {{ $shifts->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="series" class="form-label">Série</label>
                                    <select class="form-select" id="series_id" aria-label="Default select example"
                                        name="serie_id">
                                        @foreach ($serie as $series)
                                            <option value="{{ $series->id }}">
                                                {{ $series->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="series" class="form-label">Unidade</label>
                                    <select class="form-select" id="unit_id" aria-label="Default select example"
                                        name="unit_id">
                                        @foreach ($unit as $units)
                                            <option value="{{ $units->id }}">
                                                {{ $units->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>

                        <div class="col-xl">

                            <div class="card-body">

                            <div class="mb-3">
                                                                    <p class="h3">Disciplinas</p>
                                                                    @foreach ($subjects as $subject)
                                                                    <div class="form-check">
                                                                        <label class="form-check-label" for="{{ $subject->id }}">
                                                                            {{$subject->name}}
                                                                        </label>
                                                                        <input class="form-check-input" type="checkbox" value="{{ $subject->id }}" id="{{ $subject->id }}" name="subjects[]">
                                                                    </div>
                                                                    @endforeach
                                                                </div>


                                <div class="" style="margin-top: 66%">

                                    <div class="mb-3">
                                        <label for="rate" class="form-label">Taxa
                                            de Pagamento</label>
                                        <input type="text" class="form-control" id="registrationFee"
                                            name="registrationFee" autofocus />
                                    </div>

                                    <div class="mb-3">
                                        <label for="formPayment" class="form-label">Forma de
                                            Pagamento</label>
                                        <select class="form-select" id="formpayment_id"
                                            aria-label="Default select example" name="formpayment_id">
                                            @foreach ($paymentmethod as $paymentmethods)
                                                <option value="{{ $paymentmethods->id }}">
                                                    {{ $paymentmethods->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3 ">
                                        <label for="observation" class="form-label">Observação</label>
                                        <input type="text" class="form-control" id="observation" name="observation"
                                            autofocus />
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

                <!-- /Edit -->


            </div>
        </div>
    </form>
@endsection
