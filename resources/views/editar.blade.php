@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-success" href="{{route('adicionar')}}">Adicionar</a>
            <div class="card" style="margin-top:10px;">
                <div class="card-header">Lista de Leads</div>
                <div class="card-body text-center">
                    <!--BODY-->
                    <form class="form">
                        <div class="col-sm-12">
                            <input type="name" class="form-control" name="nome">
                        </div>
                        <br>
                        <div class="col-sm-12 row">
                            <div class="col-sm-6">
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="col-sm-6">
                                <input type="tel" class="form-control" name="telefone">
                            </div>
                        </div>
                        <br>
                        <div class="col-sm-12 row ">
                            <div class="col-sm-6">
                                <input type="email" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="col-sm-12">
                            <a class="btn btn-light" style="float:left" href="{{route('home')}}">Voltar</a>
                            <button class="btn btn-primary" type="submit" style="float:right">Salvar</button>
                        </div>
                    </form>
                    <!--BODY-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
