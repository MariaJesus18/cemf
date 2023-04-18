</html>

@extends('layouts.master')

@section('layout-header')
    <title>Edit User</title>
@endsection

@section('layout-content')
    <!-- Botão para acionar modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado"
        onclick="mostrar_modal()">
        Incluir Conta +
    </button>

    <!-- Modal -->
    <div class="modal fade" id="caixa_lancamento" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h1 text-center" id="TituloModalCentralizado">Adicionar Conta</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-xxl">
                        <div class="authentication-wrapper authentication-basic container-p-y">
                            <form class="mb-3" action="contaCaixa" method="POST">
                                @csrf
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
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->


    @foreach ($cashAccount as $cashAccounts)
        <p>
            <strong>ID: </strong>{{ $cashAccounts->id }}
            <strong>NOME: </strong>{{ $cashAccounts->name }}
            <strong>AGÊNCIA: </strong>{{ $cashAccounts->agency }}
            <strong>CONTA: </strong>{{ $cashAccounts->checkingAccount }}
            <strong>DÍGITO: </strong>{{ $cashAccounts->typecc }}
            <strong>CÓDICO: </strong>{{ $cashAccounts->bankCode }}
            <a href="{{route('cashAccounts.edit', $cashAccounts->id)}}">Editar</a>
        </p>
        <form action="{{route('cashAccounts.destroy', $cashAccounts)}}" method="post">
            @csrf
            @method('DELETE')   
            <button>Deletar</button>
        </form>
    @endforeach

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
