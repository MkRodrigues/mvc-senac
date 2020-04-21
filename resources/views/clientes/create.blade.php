@extends('layouts.app');

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="store-clientes" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="insereNome" required aria-required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Endereço</label>
                            <input type="text" class="form-control" id="name" name="address" aria-describedby="insereEndereco" required aria-required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">E-mail</label>
                            <input type="text" class="form-control" id="name" name="email" aria-describedby="insereEmail" required aria-required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Telefone</label>
                            <input type="tel" class="form-control" id="name" name="phone" aria-describedby="insereTelefone" required aria-required pattern="[0-9]{10}" title="Somente números (10), sem pontos ou traços" placeholder="(00)0000-0000">
                        </div>

                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection