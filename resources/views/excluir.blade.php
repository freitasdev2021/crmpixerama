@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <a class="btn btn-success" href="{{route('adicionar')}}">Adicionar</a>
            <div class="card" style="margin-top:10px;">
                <div class="card-header">Lista de Leads</div>
                <div class="card-body text-center">
                    <!--BODY-->
                    <form class="form">
                        <div class="col-sm-12">
                            <h1>Deseja Excluir Este Lead?</h1>
                        </div>
                        <div class="col-sm-12 row">
                            <div class="col-sm-6">
                                <button class="btn btn-danger">Sim</button>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{route("home")}}" class="btn btn-secondary">Não</a>
                            </div>
                        </div>
                    </form>
                    <!--BODY-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
