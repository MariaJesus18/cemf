@extends('layouts.master')

@section('layout-header')
<title>Estudantes</title>
@endsection

@section('layout-content')

<div class="container-xxl  ">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <h1 class="float-start">Estudantes </h1>
        </div>
    </div>
    <div class="row justify-content-center align-items-center g-2 mb-3">
        <div class="col">
            {{-- <div class="btn-group">
            <a href="{{route('students.index')}}" class="btn btn-outline-white border" style="font-size: 13px">Todos {{\DB::table('students')->count()}}</a>
            <a href="{{route('student.activated')}}" class="btn btn-outline-white border" style="font-size: 13px">Ativados {{\DB::table('students')->where('status','=',true)->count()}}</a>
            <a href="{{route('student.disabled')}}" class="btn btn-outline-white border" style="font-size: 13px">Suspensos {{\DB::table('students')->where('status','=',false)->count()}}</a>
            <a href="{{route('student.disabled')}}" class="btn btn-outline-white border" style="font-size: 13px">Pendentes {{\DB::table('students')->where('status','=',false)->count()}}</a>
            <a href="{{route('student.disabled')}}" class="btn btn-outline-white border" style="font-size: 13px">Em atraso {{\DB::table('students')->where('status','=',false)->count()}}</a>
        </div> --}}
    </div>
    <div class="col">
        <!-- Botão para acionar modal -->
        <button type="submit" class="btn float-end btn-primary" style="margin-right:1rem; font-size:13px;" data-toggle="modal" data-target="#ExemploModalCentralizado" onclick="mostrar_modal()">Incluir Estudantes +</button>
        <!--modal -->
        <div class="modal fade" id="caixa_lancamento" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h1 text-center" id="TituloModalCentralizado">Adicionar Conta</h5>
                        <button style="background-color: transparent; border:none;" type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="students">
                            @csrf
                            <div class="content-wrapper">
                                <div class="row">
                                    <div class="col-xl">
                                        <div class="row">
                                            <div class="col-xl">
                                                <div class="card-body">

                                                    <div class="mb-3">
                                                        <label for="exampleFormControlSelect1" class="form-label">Nome do Aluno</label>
                                                        <input type="text" name="name" id="name" class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default-company">CPF</label>
                                                        <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default-phone">Telefone 1</label>
                                                        <input type="tel" id="telephone1" class="form-control phone-mask" placeholder="telefone 1" name="telephone1" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default-phone">Telefone 2</label>
                                                        <input type="tel" id="telephone2" class="form-control phone-mask" placeholder="telefone 2" name="telephone2" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl">
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default-company">CEP</label>
                                                        <input type="" class="form-control" id="cep" placeholder="CEP" name="cep" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default">Rua</label>
                                                        <input type="text" id="road" class="form-control" placeholder="Rua" name="road" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default">Número</label>
                                                        <input type="text" id="number" class="form-control" placeholder="Numero" name="number" required>
                                                    </div>


                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default">Bairro</label>
                                                        <input type="text" id="neighborhood" class="form-control" placeholder="Bairro" name="neighborhood" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default">Complemento</label>
                                                        <input type="text" id="complement" class="form-control" placeholder="Complemento" name="complement" required>
                                                    </div>


                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default">Cidade</label>
                                                        <input type="text" id="city" class="form-control" placeholder="Cidade" name="city" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default">UF</label>
                                                        <input type="text" id="uf" class="form-control" placeholder="UF" name="uf" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default-message">Observações</label>
                                                        <textarea id="observation" class="form-control" placeholder="Observações" name="observation" required></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-default-email">Email</label>
                                                        <div class="input-group input-group-merge">
                                                            <input type="email" id="basic-default-email" class="form-control" placeholder="Email" required aria-describedby="basic-default-email2" name="email">
                                                        </div>

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
                <input type="text" class="form-control" placeholder="Buscar estudante..." aria-describedby="button-addon1">
            </div>
        </form>
    </div>

    <div class="col-4">
        <!-- <select name="download" id="download" class="btn float-end btn-white border" style="margin-right:1rem">
                    <option>Ação</option>
                </select>  -->
    </div>

</div>


<div class="table-responsive m-3">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Unidade</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student )
            <tr class="">
                <td scope="row">{{$student->id}}</td>
                <td scope="row">{{$student->name}}</td>
                <td scope="row">{{$student->email}}</td>
                <td>
                    @if ($student->status==true)
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

                                <a class="dropdown-item" href="{{ route('students.edit', $student->id) }}">Editar</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="dropdown-item">Deletar</button>
                                </form>

                                {{-- <a class="dropdown-item" href="#">Visualizar</a> --}}
                            </div>
                        </div>
                    </td>
            </tr>
            @empty
            @endforelse
        </tbody>
    </table>
</div>

</div>



<script>
    function mostrar_modal() {
        let idModal = document.getElementById('caixa_lancamento');
        let modal_lancamento = new bootstrap.Modal(idModal);
        modal_lancamento.show();

    }
</script>

@endsection