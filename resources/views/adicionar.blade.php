@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar Lead</div>
                <div class="card-body">
                    <!--BODY-->
                    <form class="form" method="POST" action="{{route('leads.create')}}">
                        @csrf
                        @method("POST")
                        <div class="col-sm-12">
                            <label>Nome</label>
                            <input type="name" class="form-control" name="nome" required maxlength="100">
                        </div>
                        <br>
                        <div class="col-sm-12 row">
                            <div class="col-sm-6">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" required maxlength="100"> 
                            </div>
                            <div class="col-sm-6">
                                <label>Telefone</label>
                                <input type="number" maxlength="11" class="form-control" name="telefone" required placeholder="Telefone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            </div>
                        </div>
                        <br>
                        <div class="col-sm-12 row ">
                            <div class="col-sm-6">
                                <label>Estado</label>
                                <select name="estado" class="form-control" required>
                                    
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label>Cidade</label>
                                <select name="cidade" class="form-control" required>

                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="col-sm-12">
                            <label>Mensagem</label>
                            <textarea class="form-control" maxlength="250" style="resize:none;" name="mensagem"></textarea>
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
