@extends('layouts.master')

@section('layout-header')
<title>Contas</title>
@endsection

@section('layout-content')
<div class="container-xxl">

    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <h1 class="float-start">Contratos</h1>
        </div>
    </div>

    <div class="row justify-content-center align-items-center g-2 mb-3">
        <div class="col">
            <!-- Botão para acionar modal -->
            <button type="submit" class="btn float-end btn-primary" style="margin-right:1rem; font-size:13px;" data-toggle="modal" data-target="#ExemploModalCentralizado" onclick="mostrar_modal()">Adicionar
                contrato</button>
            <!-- Modal -->
            <div class="modal fade" id="caixa_lancamento" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title h1 text-center" id="TituloModalCentralizado">Adicionar contrato</h5>
                            <button style="background-color: transparent; border:none;" type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-xxl">
                                <div class="authentication-wrapper authentication-basic container-p-y">

                                <!--create-->
                                    <form id="formAuthentication" class="mb-3" action="/contracts" method="POST">
                                        @csrf
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
                                                        <button type="submit" name="save" id="save" class="btn float-end" style="background-color: rgb(245, 238, 238)">Salvar</button>
                                                    </div>
                                                    <div class="row">

                                                  

                                                        <div class="col-xl">

                                                            <div class="card-body">


                                                                <div class="mb-3">
                                                                    <label for="covenants" class="form-label">Aluno</label>
                                                                    <select class="form-select" id="student_id" aria-label="Default select example" name="student_id">
                                                                        @foreach ($student as $students)
                                                                        <option value="{{ $students->id }}">
                                                                            {{ $students->name }}
                                                                        </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="covenants" class="form-label">Convênio</label>
                                                                    <select class="form-select" id="covenant_id" aria-label="Default select example" name="covenant_id">
                                                                        @foreach ($covenant as $covenants)
                                                                        <option value="{{ $covenants->id }}">
                                                                            {{ $covenants->name }}
                                                                        </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">

                                                                    <div class="d-inline-block">
                                                                        <label for="value" class="form-label">Valor</label>
                                                                        <input type="text" class="form-control " id="value" name="value" placeholder="Valor" autofocus />
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <label for="discount" class="form-label">Desconto</label>
                                                                        <input type="text" class=" form-control  " id="discount" name="discount" placeholder="Desconto" autofocus />
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="school" class="form-label">Escola</label>
                                                                    <select class="form-select" id="school_id" aria-label="Default select example" name="school_id">
                                                                        @foreach ($school as $schools)
                                                                        <option value="{{ $schools->id }}">
                                                                            {{ $schools->name }}
                                                                        </option>
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
                                                                    <select class="form-select" id="responsible_id" aria-label="Default select example" name="responsible_id">
                                                                        @foreach ($responsible as $responsibles)
                                                                        <option value="{{ $responsibles->id }}">
                                                                            {{ $responsibles->name }}
                                                                        </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="modality" class="form-label">Modalidade</label>
                                                                    <select class="form-select" id="modality_id" aria-label="Default select example" name="modality_id">
                                                                        @foreach ($modality as $modalitys)
                                                                        <option value="{{ $modalitys->id }}">
                                                                            {{ $modalitys->name }}
                                                                        </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="shift" class="form-label">Turno</label>
                                                                    <select class="form-select" id="shift_id" aria-label="Default select example" name="shift_id">
                                                                        @foreach ($shift as $shifts)
                                                                        <option value="{{ $shifts->id }}">
                                                                            {{ $shifts->name }}
                                                                        </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="series" class="form-label">Série</label>
                                                                    <select class="form-select" id="series_id" aria-label="Default select example" name="serie_id">
                                                                        @foreach ($serie as $series)
                                                                        <option value="{{ $series->id }}">
                                                                            {{ $series->name }}
                                                                        </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="series" class="form-label">Unidade</label>
                                                                    <select class="form-select" id="unit_id" aria-label="Default select example" name="unit_id">
                                                                        @foreach ($unit as $units)
                                                                        <option value="{{ $units->id }}">
                                                                            {{ $units->name }}
                                                                        </option>
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
                                                                <div class="mb-3">
                                                                    <label for="rate" class="form-label">Taxa
                                                                        de Pagamento</label>
                                                                    <input type="text" class="form-control" id="registrationFee" name="registrationFee" autofocus />
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="formPayment" class="form-label">Forma de
                                                                        Pagamento</label>
                                                                    <select class="form-select" id="formpayment_id" aria-label="Default select example" name="formpayment_id">
                                                                        @foreach ($paymentmethod as $paymentmethods)
                                                                        <option value="{{ $paymentmethods->id }}">
                                                                            {{ $paymentmethods->title }}
                                                                        </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3 ">
                                                                    <label for="observation" class="form-label">Observação</label>
                                                                    <input type="text" class="form-control" id="observation" name="observation" autofocus />
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                        


                                        </div>
                                </div>
                                </form>
                                 <!--create-->
                            </div>
                        </div>
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
                <input type="text" class="form-control" placeholder="Buscar contas..." aria-describedby="button-addon1">
            </div>
        </form>
    </div>
    <div class="col-4">
        <select name="download" id="download" class="btn float-end btn-white border" style="margin-right:1rem">
            <option>Ação</option>
        </select>
    </div>
</div>

 <!--show-->

<div class="table-responsive m-3">
    <table class="table">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Data</th>
            <th scope="col">Modalidade</th>
            <th scope="col">Mensalidade</th>
            <th scope="col">Unidade</th>
            <th scope="col">Disciplinas</th>
            <th scope="col">Status</th>
        </thead>
        <tbody>
            @forelse ($contract as $contracts)
            <tr class="">
                <td scope="row">{{ $contracts->id }}</td>
                <td scope="row">{{ $contracts->firstpaymentdate }}</td>
                <td scope="row">{{ $contracts->modality->name }}</td>
                <td scope="row">{{ $contracts->value }}</td>
                <td scope="row">{{ $contracts->unit->name }}</td>
                <td scope="row"> @for ($i = 0; $i < count($contracts->subjects); $i++)

                        @if ($i !== (count($contracts->subjects) - 1))
                        {{ $contracts->subjects[$i]->name }}<span style="font-weight: normal">,</span>
                        @else
                        {{ $contracts->subjects[$i]->name }}<span style="font-weight: normal">.</span>
                        @endif

                        @endfor</td>
                <td>
                    @if ($contracts->status==true)
                    <span class="badge text-bg-success">Ativo</span>
                    @else
                    <span class="badge text-bg-warning">Suspenso</span>
                    @endif
                </td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-white" style="border:none;" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-start" aria-labelledby="triggerId">
                            <a class="dropdown-item" href="{{ route('contracts.edit', $contracts->id) }}">Editar</a>
                            <form action="{{ route('contracts.destroy', $contracts) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="dropdown-item">Deletar</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @empty
            @endforelse
        </tbody>
    </table>
</div>

 <!--edit-->
</div>

<script>
    function mostrar_modal() {
        let idModal = document.getElementById('caixa_lancamento');
        let modal_lancamento = new bootstrap.Modal(idModal);
        modal_lancamento.show();
    }
</script>
@endsection