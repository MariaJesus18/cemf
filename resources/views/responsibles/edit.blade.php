</html>
@extends('layouts.master')


@section('layout-header')
<title>Contas</title>
@endsection

@section('layout-content')

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">

        <form class="" action="{{route('responsibles.update', $responsible->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xl">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Nome</label>
                            <input type="text" class="form-control" id="basic-default-company" placeholder="Nome" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="relative" class="form-label">Parentesco</label>
                            <select class="form-select" id="relative" aria-label="Default select example" name="relative">
                                <option value="Mãe">Mãe</option>
                                <option value="Pai">Pai</option>
                                <option value="Tio(a)">Tio(a)</option>
                                <option value="Irmão(ã)">Irmão(ã)</option>
                                <option value="Avô(ó)">Avô(ó)</option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="basic-default-email">Email</label>
                            <div class="input-group input-group-merge">
                                <input type="email" id="basic-default-email" class="form-control" placeholder="Email" required aria-describedby="basic-default-email2" name="email">

                            </div>
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">CPF</label>
                            <input type="text" class="form-control" id="basic-default-company" placeholder="CPF" name="cpf" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">cnpj</label>
                            <input type="text" class="form-control" id="basic-default-company" placeholder="cnpj" name="cnpj" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">Telefone 1</label>
                            <input type="tel" id="basic-default-phone" class="form-control phone-mask" placeholder="telefone 1" name="telephone1" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">Telefone 2</label>
                            <input type="tel" id="basic-default-phone" class="form-control phone-mask" placeholder="telefone 2" name="telephone2" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">Observações</label>
                            <textarea id="basic-default-message" class="form-control" placeholder="Observações" name="observation" required></textarea>
                        </div>


                        <div class="mb-3">
                            <label for="invoicing" class="form-label">Faturamento</label>
                            <select class="form-select" id="invoicing" aria-label="Default select example" name="invoicing">
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="col-xl">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">CEP</label>
                            <input type="" class="form-control" id="basic-default-company" placeholder="CEP" name="cep" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default">Rua</label>
                            <input type="text" id="basic-default" class="form-control" placeholder="Rua" name="road" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default">Número</label>
                            <input type="text" id="basic-default" class="form-control" placeholder="Numero" name="number" required>
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="basic-default">Bairro</label>
                            <input type="text" id="basic-default" class="form-control" placeholder="Bairro" name="neighborhood" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default">Complemento</label>
                            <input type="text" id="basic-default" class="form-control" placeholder="Complemento" name="complement" required>
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="basic-default">Cidade</label>
                            <input type="text" id="basic-default" class="form-control" placeholder="Cidade" name="city" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default">UF</label>
                            <input type="text" id="basic-default" class="form-control" placeholder="UF" name="state" required>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>



@endsection