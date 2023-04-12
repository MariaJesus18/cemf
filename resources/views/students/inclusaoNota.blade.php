

</html>

@extends('layouts.master')

@section('layout-header')
    <title>Edit User</title>
@endsection

@section('layout-content')
    <!-- Botão para acionar modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado"
        onclick="mostrar_modal()">
        Incluir Nota
    </button>

    <!-- Modal -->
    <div class="modal fade" id="caixa_lancamento" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h1 text-center" id="TituloModalCentralizado">Inclusão de Notas</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-xxl">
                        <div class="authentication-wrapper authentication-basic container-p-y">
                            <form id="formAuthentication" class="mb-3" action="index.html" method="POST">

                                <div class="mb-3">
                                    <label for="period" class="form-label">Periodo</label>
                                    <select class="form-select" id="period" aria-label="Default select example"
                                        name="">
                                        <option value="">?</option>
                                        <option value="">?</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="year" class="form-label">Ano</label>
                                    <select class="form-select" id="year" aria-label="Default select example"
                                        name="">
                                        <option value="">?</option>
                                        <option value="">?</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="value" class="form-label">Valor </label>
                                    <input type="text" class="form-control " id="value" name="velue"
                                        placeholder="Valor" autofocus />
                                </div>
                                <div class="mb-3">
                                    <label for="subjects" class="form-label">Disciplina</label>
                                    <select class="form-select" id="subjects" aria-label="Default select example"
                                        name="">
                                        <option value="">?</option>
                                        <option value="">?</option>
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
        </div>
    </div>
    <!-- /modal -->

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
