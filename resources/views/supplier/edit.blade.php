@extends('layouts.master')

@section('layout-header')
<title>Fornecedores</title>
@endsection

@section('layout-content')

<form method="post" action="{{route('suppliers.update', $supplier->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="content-wrapper">
                                <div class="row">
                                    <div class="col-xl">
                                        <div class="row">
                                            <div class="col-xl">
                                                <div class="card-body">

                                                    <div class="mb-3">
                                                        <label for="typeHolder" class="form-label">Tipo de titular</label>
                                                        <select class="form-select" id="typeHolder" aria-label="Default select example" name="typeHolder">

                                                            <option value="responsible">
                                                                Responsavel
                                                            </option>
                                                            <option value="supplier">
                                                                Fornecedor
                                                            </option>

                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="contract" class="form-label">Contrato</label>
                                                        <select class="form-select" id="contract_id" aria-label="Default select example" name="contract_id">
                                                            @foreach ($contracts as $contract)
                                                            <option value="{{ $contract->id}}">
                                                                {{ $contract->student->name }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="exampleFormControlSelect1" class="form-label">Nome </label>
                                                        <input type="text" name="name" id="name" class="form-control" value="{{$supplier->name}}">
                                                        @error('name')
                                                            <span class="badge bg-warning">{{$message}}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default-company">CPF</label>
                                                        <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf" required value="{{$supplier->cpf}}">
                                                        @error('cpf')
                                                            <span class="badge bg-warning">{{$message}}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default-company">cnpj</label>
                                                        <input type="text" class="form-control" id="cnpj" placeholder="cnpj" name="cnpj" required value="{{$supplier->cnpj}}">
                                                        @error('cnpj')
                                                            <span class="badge bg-warning">{{$message}}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default-phone">Telefone 1</label>
                                                        <input type="tel" id="telephone1" class="form-control phone-mask" placeholder="telefone 1" name="telephone1" value="{{$supplier->telephone1}}" required>
                                                        @error('telephone1')
                                                            <span class="badge bg-warning">{{$message}}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default-phone">Telefone 2</label>
                                                        <input type="tel" id="telephone2" class="form-control phone-mask" placeholder="telefone 2" name="telephone2" required value="{{$supplier->telephone2}}">
                                                        @error('telephone2')
                                                            <span class="badge bg-warning">{{$message}}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default-email">Email</label>
                                                        <div class="input-group input-group-merge">
                                                            <input type="email" id="basic-default-email" class="form-control" placeholder="Email" required aria-describedby="basic-default-email2" name="email" value="{{$supplier->email}}">
                                                            @error('email')
                                                                <span class="badge bg-warning">{{$message}}</span>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl">
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default-company">CEP</label>
                                                        <input type="" class="form-control" id="cep" placeholder="CEP" name="cep" required value="{{$supplier->cep}}">
                                                        @error('cep')
                                                            <span class="badge bg-warning">{{$message}}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default">Rua</label>
                                                        <input type="text" id="road" class="form-control" placeholder="Rua" name="road" required value="{{$supplier->road}}">
                                                        @error('road')
                                                            <span class="badge bg-warning">{{$message}}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default">Número</label>
                                                        <input type="text" id="number" class="form-control" placeholder="Numero" name="number" required value="{{$supplier->number}}">
                                                        @error('number')
                                                            <span class="badge bg-warning">{{$message}}</span>
                                                        @enderror
                                                    </div>


                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default">Bairro</label>
                                                        <input type="text" id="neighborhood" class="form-control" placeholder="Bairro" name="neighborhood" required value="{{$supplier->neighborhood}}">
                                                        @error('neighborhood')
                                                            <span class="badge bg-warning">{{$message}}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default">Complemento</label>
                                                        <input type="text" id="complement" class="form-control" placeholder="Complemento" name="complement" value="{{$supplier->complement}}" required>
                                                        @error('complment')
                                                            <span class="badge bg-warning">{{$message}}</span>
                                                        @enderror
                                                    </div>


                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default">Cidade</label>
                                                        <input type="text" id="city" class="form-control" placeholder="Cidade" name="city" required value="{{$supplier->city}}">
                                                        @error('city')
                                                            <span class="badge bg-warning">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default">UF</label>
                                                        <input type="text" id="uf" class="form-control" placeholder="UF" name="uf" required value="{{$supplier->uf}}">
                                                        @error('uf')
                                                            <span class="badge bg-warning">{{$message}}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default-message">Observações</label>
                                                        <textarea id="observation" class="form-control" placeholder="Observações" name="observation" required>{{$supplier->observation}}</textarea>
                                                        @error('observation')
                                                            <span class="badge bg-warning">{{$message}}</span>
                                                        @enderror
                                                    </div>

                                                </div>


                                            </div>

                                        </div>
                                        <div class="col text-center">
                                            <button type="submit" class="btn btn-primary">Salvar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

@endsection