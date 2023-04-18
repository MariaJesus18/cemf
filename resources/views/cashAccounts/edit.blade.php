</html>

@extends('layouts.master')

@section('layout-header')
    <title>Edit User</title>
@endsection

@section('layout-content')
 
                    <div class="container-xxl">
                        <div class="authentication-wrapper authentication-basic container-p-y">
                            <form class="mb-3" action="{{route('cashAccounts.update', $cashAccount->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input type="text" name="bankName" id="bankName" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="agencia" class="form-label">Agencia</label>
                                    <input type="text" name="agency" id="agency" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="conta" class="form-label">Conta</label>
                                    <input type="text" name="checkingAccount" id="checkingAccount" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="digito" class="form-label">Dígito</label>
                                    <input type="text" name="typecc" id="typecc" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="codigo" class="form-label">Código</label>
                                    <input type="text" name="bankCode" id="bankCode" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                    </div>
                                </div>
                            </form>
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
