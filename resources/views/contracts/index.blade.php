@extends('layouts.master')

@section('layout-header')
    <title>Edit User</title>
@endsection

@section('layout-content')
    <form id="formAuthentication" class="mb-3" action="index.html" method="POST">
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
                                    <label for="modality" class="form-label">Modalidade</label>
                                    <select class="form-select" id="modality" aria-label="Default select example"
                                        name="modality">
                                        @foreach ($modality as $modalitys)
                                            <option value="{{ $modalitys->id }}">{{ $modalitys->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="covenants" class="form-label">Convênio</label>
                                    <select class="form-select" id="covenant" aria-label="Default select example"
                                        name="covenant">
                                        @foreach ($covenant as $covenants)
                                            <option value="{{ $covenants->id }}">{{ $covenants->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">

                                    <div class="d-inline-block">
                                        <label for="value" class="form-label">Valor</label>
                                        <input type="text" class="form-control " id="value" name="velue"
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
                                    <select class="form-select" id="school" aria-label="Default select example"
                                        name="school">
                                        @foreach ($school as $schools)
                                        <option value="{{ $schools->id }}">{{ $schools->name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="due_date" class="form-label">Data do 1° Vencimento</label>
                                   <input type="date">
                                </div>
                                <div class="mb-3">
                                    <label for="responsible" class="form-label">Responsavel pelo pagamento</label>
                                    <select class="form-select" id="responsible" aria-label="Default select example"
                                        name="">
                                        @foreach ($responsible as $responsibles)
                                        <option value="{{ $responsibles->id }}">{{ $responsibles->name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="shift" class="form-label">Turno</label>
                                    <select class="form-select" id="shift" aria-label="Default select example"
                                        name="shift">
                                        @foreach ($shift as $shifts)
                                        <option value="{{ $shifts->id }}">{{ $shifts->name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="series" class="form-label">Série</label>
                                    <select class="form-select" id="series" aria-label="Default select example"
                                        name="serie">
                                        @foreach ($serie as $series)
                                        <option value="{{ $series->id }}">{{ $series->name }}</option>
                                    @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>

                        <div class="col-xl">

                            <div class="card-body">

                                <div class="mb-3">
                                    <p class="h3">Disciplinas</p>

                                    @foreach ($subject as $subjects)
                

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{$subjects->id}}" id="Subjects"
                                            name="Subjects">
                                        <label class="form-check-label" for="Subjects">
                                           {{ $subjects->name}}
                                        </label>
                                    </div>
                                @endforeach

                                    

                                </div>


                                <div class="" style="margin-top: 66%">

                                    <div class="mb-3">
                                        <label for="rate" class="form-label">Taxa de Pagamento</label>
                                        <input type="text" class="form-control" id="rate" name=""
                                            autofocus />
                                    </div>

                                    <div class="mb-3">
                                        <label for="formPayment" class="form-label">Forma de Pagamento</label>
                                        <select class="form-select" id="paymentmethods" aria-label="Default select example"
                                            name="paymentmethods">
                                            @foreach ($paymentmethod as $paymentmethods)
                                        <option value="{{ $paymentmethods->id }}">{{ $paymentmethods->title }}</option>
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

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
@endsection
