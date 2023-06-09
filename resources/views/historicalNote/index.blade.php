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
            <a href="{{route('historicalnotes.index')}}" class="btn btn-outline-white border" style="font-size: 13px">Todos {{\DB::table('historicalnotes')->count()}}</a>
            <a href="{{route('historicalnote.activated')}}" class="btn btn-outline-white border" style="font-size: 13px">Ativados {{\DB::table('historicalnotes')->where('status','=',true)->count()}}</a>
            <a href="{{route('historicalnote.disabled')}}" class="btn btn-outline-white border" style="font-size: 13px">Suspensos {{\DB::table('historicalnotes')->where('status','=',false)->count()}}</a>
            <a href="{{route('historicalnote.disabled')}}" class="btn btn-outline-white border" style="font-size: 13px">Pendentes {{\DB::table('historicalnotes')->where('status','=',false)->count()}}</a>
            <a href="{{route('historicalnote.disabled')}}" class="btn btn-outline-white border" style="font-size: 13px">Em atraso {{\DB::table('historicalnotes')->where('status','=',false)->count()}}</a>
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
                        <form id="formAuthentication" class="mb-3" action="historicalNotes" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="contract" class="form-label">Periodo</label>
                                <select class="form-select" id="period_id" aria-label="Default select example" name="period_id">
                                    @foreach ($periods as $period)
                                    <option value="{{ $period->id}}">
                                        {{ $period->title }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="contract" class="form-label">Serie</label>
                                <select class="form-select" id="serie_id" aria-label="Default select example" name="serie_id">
                                    @foreach ($series as $serie)
                                    <option value="{{ $serie->id}}">
                                        {{ $serie->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="year" class="form-label">Ano </label>
                                <input type="text" class="form-control " id="year" name="year" placeholder="Valor" autofocus />
                            </div>
                            <div class="mb-3">
                                <label for="value" class="form-label">Valor </label>
                                <input type="text" class="form-control " id="note" name="note" placeholder="Valor" autofocus />
                            </div>
                            <div class="mb-3">
                                <label for="subjects" class="form-label">Disciplina</label>
                                <select class="form-select" id="subject" aria-label="Default select example" name="subject_id">
                                    @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id}}">
                                        {{ $subject->name }}
                                    </option>
                                    @endforeach
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

            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Unidade</th>
            <th scope="col">Nota</th>
            <th scope="col">Status</th>


        </thead>
        <tbody>
            @forelse ($historicalnotes as $historicalnote )
            <tr class="">
                <td scope="row">{{$historicalnote->id}}</td>
                <td scope="row">{{$historicalnote->period_id}}</td>
                <td scope="row">{{$historicalnote->serie_id}}</td>
                <td scope="row">{{$historicalnote->year}}</td>
                <td scope="row">{{$historicalnote->note}}</td>
                <td>
                    @if ($historicalnote->status==true)
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

                            <a class="dropdown-item" href="{{ route('historicalNotes.edit', $historicalnote->id) }}">Editar</a>
                            <form action="{{ route('historicalNotes.destroy', $historicalnote->id) }}" method="post">
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