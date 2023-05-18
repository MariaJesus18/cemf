</html>
@extends('layouts.master')


@section('layout-header')
<title>Equipes</title>
@endsection

@section('layout-content')
<div class="container-xxl  ">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <h1 class="float-start">Equipes</h1>
        </div>
    </div>
    <div class="row justify-content-center align-items-center g-2 mb-3">
        <div class="col">
            <!-- Botão para acionar modal -->

            <button type="submit" class="btn float-end btn-primary" style="margin-right:1rem; font-size:13px;" data-toggle="modal" data-target="#ExemploModalCentralizado" onclick="mostrar_modal()">Adicionar
                Equipe</button>
            <!-- Modal -->
            <div class="modal fade" id="caixa_lancamento" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title h1 text-center" id="TituloModalCentralizado">Adicionar disciplina
                            </h5>
                            <button style="background-color: transparent; border:none;" type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-xxl">
                                <div class="authentication-wrapper authentication-basic container-p-y">


                                    <form class="mb-3" action="{{ route('teams.store') }}" method="POST">
                                        @csrf

                                        <div class="row">
                                            <div class="input-field col s3">
                                                <label for="unit" class="form-label">Unidade</label>

                                                <select name="unit_id" id="units" class="form-select form-select-lg mb-3">

                                                    @foreach ($unit as $units)
                                                    <option value="{{ $units->id }}">{{ $units->name }}
                                                    </option>
                                                    @endforeach
                                                </select>

                                                <label for="user" class="form-label">Membro</label>
                                                <select name="user_id" id="units" class="form-select form-select-lg mb-3">

                                                    @foreach ($user as $users)
                                                    <option value="{{ $users->id }}">{{ $users->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
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
        </div>
    </div>

    <!-- {{-- <div class="w-100 h-100 bg-white"> --}}
        {{-- <div class="container "> --}}


        <div class="row ">
            <div class="col-8">
                <form action="" class="form-group ">
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i
                                class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                        <input type="text" class="form-control" placeholder="Buscar disciplinas..."
                            aria-describedby="button-addon1">
                    </div>
                </form>
            </div>

            <div class="col-4">
                <select name="download" id="download" class="btn float-end btn-white border" style="margin-right:1rem">
                    <option>Ação</option>
                </select>
            </div>

        </div>
        {{-- </div> --}} -->

    <!--exibir dados -->

    <div class="table-responsive m-3">
        <table class="table">
            <thead>
                <th scope="col">Usuario</th>
                <th scope="col">Unidade</th>


            </thead>
            <tbody>
                @forelse ($team as $teams)
                <tr class="">
                    <td scope="row">{{ $teams->user->id }}</td>
                    <td scope="row">{{ $teams->unit->id }}</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-white" style="border:none;" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-start" aria-labelledby="triggerId">

                                <a class="dropdown-item" href="{{ route('teams.edit', ['team'=>$teams->id]) }}">Editar</a>
                                <form action="{{ route('teams.destroy', $teams) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="dropdown-item">Deletar</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
    <!--exibir dados -->

</div>

<script>
    function mostrar_modal() {
        let idModal = document.getElementById('caixa_lancamento');
        let modal_lancamento = new bootstrap.Modal(idModal);
        modal_lancamento.show();

    }
</script>
@endsection