@extends('layouts.master')


@section('layout-header')
<title>Usuários</title>
@endsection

@section('layout-content')

<form id="formAuthentication" class="mb-3" action="{{route('users.update',['user'=>$user->id])}}" method="POST">
    @csrf
    <div class="container-xxl  ">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <h1 class="float-start">Id:{{$user->id}} Nome: {{$user->name}}</h1>
            </div>
            <div class="col">
                <button type="submit" name="download" id="download" class="btn float-end btn-primary" style="margin-right:1rem; font-size:13px;">Salvar</button>
                <a type="submit" name="download" id="download" class="btn float-end btn-white " style="border:solid 1px; border-color:rgb(166, 160, 160); margin-right:1rem; font-size:13px;">Cancelar</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label class="form-label" for="basic-default-email">Nome</label>
                <div class="input-group input-group-merge">
                  <input type="text" id="basic-default-email" class="form-control" placeholder="Nome" name="name"aria-describedby="basic-default" required value="{{$user->name}}">
                </div>
            </div>
        
            <div class="mb-3">
                <label for="supplier" class="form-label">Perfil</label>
                <select class="form-select" id="supplier" name="profile" aria-label="Default select example"
                    name="">
                    <option>Perfil</option>
                </select>
            </div>
           
            <div class="mb-3">
                <label class="form-label" for="basic-default-email">Login</label>
                <div class="input-group input-group-merge">
                  <input type="text" id="basic-default-email" class="form-control" placeholder="Login" name="login" value="" aria-describedby="basic-default" required>
                </div>
            </div>
        
            <div class="mb-3">
                <label class="form-label" for="basic-default-email">Telefone</label>
                <div class="input-group input-group-merge">
                  <input type="text" id="basic-default-email" class="form-control" placeholder="Telefone" name="telephone" value="{{$user->telefone}}" aria-describedby="basic-default" required>
                </div>
            </div>
        
            <div class="mb-3">
                <label class="form-label" for="basic-default-email">E-mail</label>
                <div class="input-group input-group-merge">
                  <input type="text" id="basic-default-email" class="form-control" placeholder="Telefone" name="email" value="{{$user->email}}" aria-describedby="basic-default" required>
                </div>
            </div>
        </div>

        <div class="col">

            <div class="mb-3">
                <label for="supplier" class="form-label">Status</label>
                <select class="form-select" id="supplier" name="status" aria-label="Default select example"
                    name="">
                    @switch($user->status)
                        @case(true)
                        <option value="1" selected>Ativado</option>
                        <option value="0" >Suspender</option>
                            @break
                        @case(false)
                            <option value="0" selected>Suspenso</option>
                            <option value="1"> Ativar</option>
                            @break
                        @default
                    @endswitch
                </select>
            </div>
        
            
            <div class="mb-3">
                <label for="supplier" class="form-label">Sede</label>
                <select class="form-select" id="supplier" name="unit_id" aria-label="Default select example">
                    <option>Sede</option>
                </select>
            </div>
        
        </div>
    </div>

    



</form>

@endsection