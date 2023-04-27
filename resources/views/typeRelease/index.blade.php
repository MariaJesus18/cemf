@extends('layouts.master')
@section('layout-header')
    <title>Tipo de lancamentos</title>
@endsection

@section('layout-content')
    <div class="container-xxl  ">


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
            <div class="row justify-content-center align-items-center g-2 mb-3">
                <div class="col">
                    <a href="{{route('typeReleases.create')}}" name="download" id="download" class="btn float-end btn-primary" style="color:white; margin-right:1rem; font-size:13px;">Adicionar tipo de Lancamentos</a>
                </div>
            </div>
        </div>
        <div class="table-responsive m-3">
            <table class="table">
                <thead>
                    <th scope="col">Id</th>
                    <th scope="col">Titulo</th>
                </thead>
                <tbody>
                    @forelse ($typeRelease as $typeReleases)
                        <tr class="">
                            <td scope="row">{{ $typeReleases->id }}</td>
                            <td scope="row">{{ $typeReleases->title }}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-white" style="border:none;" id="triggerId"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-start" aria-labelledby="triggerId">

                                        <a class="dropdown-item"
                                            href="{{ route('typeReleases.edit', $typeReleases->id) }}">Editar</a>
                                        <form action="{{ route('typeReleases.destroy', $typeReleases) }}" method="post">
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
@endsection
