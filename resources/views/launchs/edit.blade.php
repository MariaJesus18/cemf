@extends('layouts.master')

@section('layout-header')
<title>Contas</title>
@endsection

@section('layout-content')
<form id="formAuthentication" class="mb-3" action="{{ route('launchs.update', $launch->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="container-xxl  ">
        <div class="card-body mb-3">
            <h1 class="float-start">#123 - CEMF </h1>
            <button type="submit" name="save" id="save" class="btn float-end btn-light">Salvar</button>
            <button type="submit" name="download" id="download" class="btn float-end btn-primary" style="margin-right:1rem">Baixar</button>
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

          

                    <div class="col-xl">

                        <div class="card-body">


                            <div class="mb-3">

                                <div class="d-inline-block">
                                    <label for="originalValue" class="form-label">Valor Original</label>
                                    <input type="text" class="form-control " id="originalValue" name="originalValue" placeholder="Valor" autofocus />
                                </div>
                                <div class="d-inline-block">
                                    <label for="surcharge" class="form-label">Acréscimo</label>
                                    <input type="text" class=" form-control  " id="surcharge" name="surcharge" placeholder="discount" autofocus />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="supplier" class="form-label">supplier</label>
                                <select class="form-select" id="supplier" aria-label="Default select example" name="supplier">
                                    @foreach ($supplier as $suppliers)
                                    <option value="{{$suppliers->id}}">{{$suppliers->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="student" class="form-label">student</label>
                                <select class="form-select" id="student" aria-label="Default select example" name="student">
                                    @foreach ($student as $students)
                                    <option value="{{$students->id}}">{{$students->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="unit" class="form-label">unit</label>
                                <select class="form-select" id="unit" aria-label="Default select example" name="unit">
                                    @foreach ($unit as $units)
                                    <option value="{{$units->id}}">{{$units->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">type</label>
                                <select class="form-select" id="type" aria-label="Default select example" name="type">
                                    @foreach ($type as $types)
                                    <option value="{{$types->id}}">{{$types->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">category</label>
                                <select class="form-select" id="category" aria-label="Default select example" name="category">
                                    @foreach ($category as $categorys)
                                    <option value="{{$categorys->id}}">{{$categorys->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3 ">
                                <label for="historic" class="form-label">historic</label>
                                <input type="text" class="form-control" id="historic" name="historic" autofocus />
                            </div>

                        </div>
                    </div>

                    <div class="col-xl">

                        <div class="card-body">

                            <div class="mb-3">

                                <div class="d-inline-block">
                                    <label for="discount" class="form-label">discount</label>
                                    <input type="text" class="form-control " id="discount" name="discount" autofocus />
                                </div>
                                <div class="d-inline-block">
                                    <label for="postingAmount" class="form-label">Valor do lançamento</label>
                                    <input type="text" class=" form-control  " id="postingAmount" name="postingAmount" autofocus />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="cashAccount" class="form-label">Conta</label>
                                <select class="form-select" id="cashAccounts" aria-label="Default select example" name="cashAccounts">
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
                                <select class="form-select" id="paymentMethod" aria-label="Default select example" name="paymentMethod">
                                    @foreach ($paymentMethod as $paymentMethods)
                                    <option value="{{$paymentMethods->id}}">{{$paymentMethods->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="contract" class="form-label">contract</label>
                                <select class="form-select" id="contract" aria-label="Default select example" name="contract">
                                    @foreach ($contract as $launchs)
                                    <option value="{{$launchs->id}}">{{$launchs->id}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="low" class="form-label">Baixa</label>
                                <input type="date" class="form-control" id="lowDate" name="lowDate" autofocus />
                            </div>
                            <div class="mb-3">
                                <label for="barcode" class="form-label">Código de barras</label>
                                <input type="number" class="form-control" id="barcode" name="barcode" autofocus />
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
@endsection