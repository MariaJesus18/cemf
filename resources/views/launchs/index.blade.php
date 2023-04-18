@extends('layouts.master')

@section('layout-header')
    <title>Edit User</title>
@endsection

@section('layout-content')
    <form id="formAuthentication" class="mb-3" action="index.html" method="POST">
        <div class="container-xxl  ">
            <div class="card-body mb-3">
                <h1 class="float-start">#123 - CEMF </h1>
                <button tipo="submit" name="save" id="save" class="btn float-end btn-light">Salvar</button>
                <button tipo="submit" name="download" id="download" class="btn float-end btn-primary"
                    style="margin-right:1rem">Baixar</button>
            </div>
        </div>

        <div class="container-xxl">
            <div class="authentication-wrapper authentication-basic container-p-y">

                <div class="card mb-4">
                    <div class="card-header">
                        <button tipo="submit" name="effect" id="effect" class="btn btn-success float-end">Efetivar
                            Matricula +</button>
                    </div>
                    <div class="row">

                        <!-- Edit -->

                        <div class="col-xl">

                            <div class="card-body">


                                <div class="mb-3">

                                    <div class="d-inline-block">
                                        <label for="valororiginal" class="form-label">Valor Original</label>
                                        <input tipo="text" class="form-control " id="valororiginal" name="valororiginal"
                                            placeholder="Valor" autofocus />
                                    </div>
                                    <div class="d-inline-block">
                                        <label for="acrescimo" class="form-label">Acréscimo</label>
                                        <input tipo="text" class=" form-control  " id="acrescimo" name="acrescimo"
                                            placeholder="Desconto" autofocus />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="fornecedor" class="form-label">Fornecedor/Responsável</label>
                                    <select class="form-select" id="fornecedor" aria-label="Default select example"
                                        name="fornecedor">
                                        <option value="Sede">?</option>
                                        <option value="">?</option>
                                    </select>
                                </div>
                                <div class="mb-3 ">
                                    <label for="cpf" class="form-label">CPF/CNPJ</label>
                                    <input tipo="text" class="form-control" id="cpf" name="cpf" autofocus />
                                </div>
                                <div class="mb-3">
                                    <label for="responsavel" class="form-label">Responsável</label>
                                    <select class="form-select" id="responsavel" aria-label="Default select example"
                                        name="responsavel">
                                        <option value="">?</option>
                                        <option value="">?</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="aluno" class="form-label">Aluno</label>
                                    <select class="form-select" id="aluno" aria-label="Default select example"
                                        name="aluno">
                                        <option value="">?</option>
                                        <option value="">?</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="unidade" class="form-label">Unidade</label>
                                    <select class="form-select" id="unidade" aria-label="Default select example"
                                        name="tipo">
                                        <option value="">?</option>
                                        <option value="">?</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="tipo" class="form-label">Tipo</label>
                                    <select class="form-select" id="tipo" aria-label="Default select example"
                                        name="tipo">
                                        <option value="">?</option>
                                        <option value="">?</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="categoria" class="form-label">Categoria</label>
                                    <select class="form-select" id="categoria" aria-label="Default select example"
                                        name="categoria">
                                        <option value="">?</option>
                                        <option value="">?</option>
                                    </select>
                                </div>

                                <div class="mb-3 ">
                                    <label for="historico" class="form-label">historico</label>
                                    <input tipo="text" class="form-control" id="historico" name="historico"
                                        autofocus />
                                </div>

                            </div>
                        </div>

                        <div class="col-xl">

                            <div class="card-body">

                                <div class="mb-3">

                                    <div class="d-inline-block">
                                        <label for="desconto" class="form-label">Desconto</label>
                                        <input tipo="text" class="form-control " id="desconto" name="desconto"
                                            autofocus />
                                    </div>
                                    <div class="d-inline-block">
                                        <label for="valorlancamento" class="form-label">Valor do lançamento</label>
                                        <input tipo="text" class=" form-control  " id="valorlancamento" name="valorlancamento"
                                            autofocus />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="contacaixa" class="form-label">Conta</label>
                                    <select class="form-select" id="contacaixa" aria-label="Default select example"
                                        name="contacaixa">
                                        <option value="">?</option>
                                        <option value="">?</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="vencimento" class="form-label">Vencimento</label>
                                    <select class="form-select" id="vencimento" aria-label="Default select example"
                                        name="vencimento">
                                        <option value="">?</option>
                                        <option value="">?</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="parcela" class="form-label">Parcela</label>
                                    <select class="form-select" id="parcela" aria-label="Default select example"
                                        name="parcela">
                                        <option value="">?</option>
                                        <option value="">?</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="formapagamento" class="form-label">Forma de Pagamento</label>
                                    <select class="form-select" id="formapagamento" aria-label="Default select example"
                                        name="formapagamento">
                                        <option value="">?</option>
                                        <option value="">?</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="contrato" class="form-label">Contrato</label>
                                    <select class="form-select" id="contrato" aria-label="Default select example"
                                        name="contrato">
                                        <option value="">?</option>
                                        <option value="">?</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="low" class="form-label">Baixa</label>
                                    <input tipo="date" class="form-control" id="databaixa" name="databaixa"
                                        autofocus />
                                </div>
                                <div class="mb-3">
                                    <label for="codigobarras" class="form-label">Código de barras</label>
                                    <input tipo="number" class="form-control" id="codigobarras" name="codigobarras"
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
