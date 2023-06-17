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
                                <form id="formAuthentication" class="mb-3" action="/launchs" method="POST">
        @csrf   
        <div class="container-xxl  ">
            <div class="card-body mb-3">
                <h1 class="float-start">#123 - CEMF </h1>
                <button type="submit" name="save" id="save" class="btn float-end btn-light">Salvar</button>
                <button type="submit" name="download" id="download" class="btn float-end btn-primary"
                    style="margin-right:1rem">Baixar</button>
            </div>
        </div>

        <div class="container-xxl">
            <div class="authentication-wrapper authentication-basic container-p-y">

                <div class="card mb-4">
                    <div class="card-header">
                        <button type="submit" name="effect" id="effect" class="btn btn-success float-end">Efetivar
                            Matricula +</button>
                    </div>
                    <div class="row">

                        <!-- Edit -->

                        <div class="col-xl">

                            <div class="card-body">


                                <div class="mb-3">

                                    <div class="d-inline-block">
                                        <label for="originalValue" class="form-label">Valor Original</label>
                                        <input type="text" class="form-control " id="originalValue" name="originalValue"
                                            placeholder="Valor" autofocus />
                                    </div>
                                    <div class="d-inline-block">
                                        <label for="surcharge" class="form-label">Acréscimo</label>
                                        <input type="text" class=" form-control  " id="surcharge" name="surcharge"
                                            placeholder="discount" autofocus />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="supplier" class="form-label">supplier</label>
                                    <select class="form-select" id="supplier" aria-label="Default select example"
                                        name="supplier">
                                        @foreach ($supplier as $suppliers)
                                        <option value="{{$suppliers->id}}">{{$suppliers->name}}</option>
                                       @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="student" class="form-label">student</label>
                                    <select class="form-select" id="student" aria-label="Default select example"
                                        name="student">
                                        @foreach ($student as $students)
                                        <option value="{{$students->id}}">{{$students->name}}</option>
                                       @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="unit" class="form-label">unit</label>
                                    <select class="form-select" id="unit" aria-label="Default select example"
                                        name="unit">
                                        @foreach ($unit as $units)
                                        <option value="{{$units->id}}">{{$units->name}}</option>
                                       @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="type" class="form-label">type</label>
                                    <select class="form-select" id="type" aria-label="Default select example"
                                        name="type">
                                        @foreach ($type as $types)
                                        <option value="{{$types->id}}">{{$types->title}}</option>
                                       @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="category" class="form-label">category</label>
                                    <select class="form-select" id="category" aria-label="Default select example"
                                        name="category">
                                        @foreach ($category as $categorys)
                                        <option value="{{$categorys->id}}">{{$categorys->title}}</option>
                                       @endforeach
                                    </select>
                                </div>

                                <div class="mb-3 ">
                                    <label for="historic" class="form-label">historic</label>
                                    <input type="text" class="form-control" id="historic" name="historic"
                                        autofocus />
                                </div>

                            </div>
                        </div>

                        <div class="col-xl">

                            <div class="card-body">

                                <div class="mb-3">

                                    <div class="d-inline-block">
                                        <label for="discount" class="form-label">discount</label>
                                        <input type="text" class="form-control " id="discount" name="discount"
                                            autofocus />
                                    </div>
                                    <div class="d-inline-block">
                                        <label for="postingAmount" class="form-label">Valor do lançamento</label>
                                        <input type="text" class=" form-control  " id="postingAmount" name="postingAmount"
                                            autofocus />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="cashAccount" class="form-label">Conta</label>
                                    <select class="form-select" id="cashAccounts" aria-label="Default select example"
                                        name="cashAccounts">
                                        @foreach ($cashAccount as $cashAccounts)
                                        <option value="{{$cashAccounts->id}}">{{$cashAccounts->bankName}}</option>
                                       @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="expiration" class="form-label">Vencimento</label>
                                    <input type="date" id="expiration" name="expiration" class="form-control">
                                </div>

                              
                                <div class="mb-3">
                                    <label for="installment" class="form-label">Parcela</label>
                                    <input type="text" name="installment" id="installment">
                                </div>
                                <div class="mb-3">
                                    <label for="paymentMethod" class="form-label">Forma de Pagamento</label>
                                    <select class="form-select" id="paymentMethod" aria-label="Default select example"
                                        name="paymentMethod">
                                        @foreach ($paymentMethod as $paymentMethods)
                                        <option value="{{$paymentMethods->id}}">{{$paymentMethods->title}}</option>
                                       @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="contract" class="form-label">contract</label>
                                    <select class="form-select" id="contract" aria-label="Default select example"
                                        name="contract">
                                        @foreach ($contract as $launchs)
                                        <option value="{{$launchs->id}}">{{$launchs->id}}</option>
                                       @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="low" class="form-label">Baixa</label>
                                    <input type="date" class="form-control" id="lowDate" name="lowDate"
                                        autofocus />
                                </div>
                                <div class="mb-3">
                                    <label for="barcode" class="form-label">Código de barras</label>
                                    <input type="number" class="form-control" id="barcode" name="barcode"
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
            <th scope="col">Fornecedor/responsavel</th>
            <th scope="col">vencimento</th>
            <th scope="col">Valor</th>
            <th scope="col">Unidade</th>
            <th scope="col">Status</th>
        </thead>
        <tbody>
            @forelse ($launch as $launchs)
            <tr class="">
                <td scope="row">{{ $launchs->id }}</td>
                <td scope="row">{{ $launchs->supplier}}</td>
                <td scope="row">{{ $launchs->expiration }}</td>
                <td scope="row">{{ $launchs->originalValue }}</td>
                <td scope="row">{{ $launchs->unit }}</td>
                <td scope="row">
                    @if ($launchs->status==true)
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
                            <a class="dropdown-item" href="{{ route('launchs.edit', $launchs->id) }}">Editar</a>
                            <form action="{{ route('launchs.destroy', $launchs) }}" method="post">
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
