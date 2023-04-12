@extends('layouts.master')

@section('layout-header')
    <title>Unidades</title>
@endsection


@section('layout-content')
<!-- modal -->


<div class="container-xxl">
    <div class="card-body">
        <button type="submit" name="save" id="save" class="btn float-end btn-light">Salvar</button>
        <button type="button" class="btn float-end btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado"
            onclick="mostrar_modal()">
            Inclusão de Responsável
    </div>
</div>

</button>

<div class="modal fade" id="caixa_lancamento" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h1 text-center" id="TituloModalCentralizado">Inclusão de Responsável</h5>
                <button style="background-color: transparent; border:none;" type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <div class="modal-body">
                <div class="container-xxl">
                    <div class="content-wrapper">

                        <div class="row">
                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-xl">

                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-default-company">Nome</label>
                                                    <input type="text" class="form-control" id="basic-default-company" placeholder="Nome"
                                                        name="" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-default-phone">Parentesco</label>
                                                    <input type="text" class="form-control phone-mask" placeholder="Parentesco"
                                                        name="" required>
                                                </div>


                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-default-email">Email</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="email" id="basic-default-email" class="form-control" placeholder="Email"
                                                            required aria-describedby="basic-default-email2">
                                                        <span class="input-group-text" id="basic-default-email2">@example.com</span>
                                                    </div>
                                                </div>


                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-default-company">CPF</label>
                                                    <input type="text" class="form-control" id="basic-default-company" placeholder="CPF"
                                                        name="" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-default-phone">Telefone 1</label>
                                                    <input type="tel" id="basic-default-phone" class="form-control phone-mask"
                                                        placeholder="telefone 1" name="" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-default-phone">Telefone 2</label>
                                                    <input type="tel" id="basic-default-phone" class="form-control phone-mask"
                                                        placeholder="telefone 2" name="" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-default-message">Observações</label>
                                                    <textarea id="basic-default-message" class="form-control" placeholder="Observações" name="" required></textarea>
                                                </div>



                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Faturamento</label>
                                                    <select class="form-select" id="exampleFormControlSelect1"
                                                        aria-label="Default select example" name="">
                                                        <option value="">?</option>
                                                        <option value="">?</option>
                                                        <option value="">?</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-xl">
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-default-company">CEP</label>
                                                    <input type="" class="form-control" id="basic-default-company" placeholder="CEP"
                                                        name="" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-default">Rua</label>
                                                    <input type="text" id="basic-default" class="form-control" placeholder="Rua" name=""
                                                        required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-default">Número</label>
                                                    <input type="text" id="basic-default" class="form-control" placeholder="Numero"
                                                        name="" required>
                                                </div>


                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-default">Bairro</label>
                                                    <input type="text" id="basic-default" class="form-control" placeholder="Bairro"
                                                        name="" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-default">Complemento</label>
                                                    <input type="text" id="basic-default" class="form-control" placeholder="Complemento"
                                                        name="" required>
                                                </div>


                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-default">Cidade/UF</label>
                                                    <input type="text" id="basic-default" class="form-control" placeholder="Cidade"
                                                        name="" required>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>



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

<script>
    function mostrar_modal() {
        let idModal = document.getElementById('caixa_lancamento');
        let modal_lancamento = new bootstrap.Modal(idModal);
        modal_lancamento.show();

    }
</script>

@endsection
