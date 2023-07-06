</html>
@extends('layouts.master')


@section('layout-header')
<title>Estudante</title>
@endsection

@section('layout-content')

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      
        <form class="" action="{{route('students.update', $student->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-xl">
                        <div class="row">
                            <div class="col-xl">
                                <div class="card-body">

                                    <div class="mb-3">
                                        <label for="exampleFormControlSelect1" class="form-label">Nome do Aluno</label>
                                        <input type="text" name="name" id="name" class="form-control" value="{{$student->name}}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">CPF</label>
                                        <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf" value="{{$student->cpf}}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-phone">Telefone 1</label>
                                        <input type="tel" id="telephone1" class="form-control phone-mask" placeholder="telefone 1" name="telephone1" value="{{$student->telephone1}}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-phone">Telefone 2</label>
                                        <input type="tel" id="telephone2" class="form-control phone-mask" placeholder="telefone 2" name="telephone2" value="{{$student->telephone2}}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-email">Email</label>
                                        <div class="input-group input-group-merge">
                                            <input type="email" id="basic-default-email" class="form-control" placeholder="Email"  aria-describedby="basic-default-email2" name="email" value="{{$student->email}}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">CEP</label>
                                        <input type="" class="form-control" id="cep" placeholder="CEP" name="cep" value="{{$student->cep}}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default">Rua</label>
                                        <input type="text" id="road" class="form-control" placeholder="Rua" name="road" value="{{$student->road}}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default">Número</label>
                                        <input type="text" id="number" class="form-control" placeholder="Numero" name="number" value="{{$student->number}}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default">Bairro</label>
                                        <input type="text" id="neighborhood" class="form-control" placeholder="Bairro" name="neighborhood" value="{{$student->neighborhood}}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default">Complemento</label>
                                        <input type="text" id="complement" class="form-control" placeholder="Complemento" name="complement" value="{{$student->complement}}"> 
                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default">Cidade</label>
                                        <input type="text" id="city" class="form-control" placeholder="Cidade" name="city" value="{{$student->city}}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default">UF</label>
                                        <input type="text" id="uf" class="form-control" placeholder="UF" name="uf" value="{{$student->uf}}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Observações</label>
                                        <textarea id="observation" class="form-control" name="observation" value="{{$student->observation}}"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-center">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-secondary"><a href="/students" style="color: white">Voltar</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        </form>
    </div>
</div>



@endsection