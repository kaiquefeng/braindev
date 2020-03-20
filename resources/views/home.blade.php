@extends('layouts.master')

@section('content')
<main class="braindev-vh-100">
    <div class="container text-center mt-5 pt-5">


        <div class="painel-grid-dashboard container mt-4">
            <div class="sidebar">
                <div class="text card-dashboard" id="minha-conta" > Minha conta <i class="fa fa-user"></i> </div></a>
                <div class="text card-dashboard" id="pedidos" >  Pedidos <i class="fa fa-tag"></i></div>
                <div class="text card-dashboard" id="planos" > Planos <i class="fa fa-bars"></i></div>
                <div class="text card-dashboard" id="servicos" > Serviços <i class="fa fa-bars"></i></div>
                <div class="text card-dashboard" id="depoimento" > Depoimentos <i class="fa fa-bars"></i></div>
                
            </div>

            <div class="sidebar-right">

                <div class="meu-perfil text-left">

                    
                    <form class="container formCheckout" action="{{ route('register') }}" method="POST">
                    <h3>Meu Perfil</h3>
                        @csrf

                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Digite seu Nome *" required>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="empresa" name="inputEmpresa" placeholder="Nome da empresa *" required>
                            </div>
                            <div class="form-group col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Digite seu Email *" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" placeholder="Digite seu CPF *" required>

                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <input id="cnpj" type="cnpj" class="form-control @error('cnpj') is-invalid @enderror" name="cnpj" value="{{ old('cnpj') }}" required autocomplete="cnpj" placeholder="Digite seu CNPJ *" required>

                                @error('cnpj')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Digite seu Telefone *" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="endereco" name="telefone" placeholder="Seu endereço *" required>
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="numero" name="numero" placeholder="Número *" required>
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP ">
                            </div>

                            <div class="form-group col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Crie uma senha ">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme sua senha ">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-braindev"> {{ __('Salvar') }} </button>
                    </form>
                </div>

                <div class="meus-pedidos text-left hide">

                    
                    <form class="container formCheckout" action="{{ route('register') }}" method="POST">
                    <h3>Meus pedidos</h3>
                        @csrf

                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Digite seu Nome *" required>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="empresa" name="inputEmpresa" placeholder="Nome da empresa *" required>
                            </div>
                            <div class="form-group col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Digite seu Email *" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" placeholder="Digite seu CPF *" required>

                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <input id="cnpj" type="cnpj" class="form-control @error('cnpj') is-invalid @enderror" name="cnpj" value="{{ old('cnpj') }}" required autocomplete="cnpj" placeholder="Digite seu CNPJ *" required>

                                @error('cnpj')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Digite seu Telefone *" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="endereco" name="telefone" placeholder="Seu endereço *" required>
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="numero" name="numero" placeholder="Número *" required>
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP ">
                            </div>

                            <div class="form-group col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Crie uma senha ">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme sua senha ">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-braindev"> {{ __('Salvar') }} </button>
                    </form>
                </div>

                <div class="meus-planos text-left hide">

                    
                   <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nome do plano</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Preço</th>
                            <th scope="col" colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="col">Capa</th>
                            <th scope="col">Título</th>
                            <th scope="col">Sinopse</th>
                            <th scope="col">Protagonista</th>
                            <th scope="col" colspan="2">Ações</th>
                        </tr>
                        
                    </tbody>
                </table>
                </div>

                <div class="meus-servicos text-left hide">

                    
                    <form class="container formCheckout" action="{{ route('register') }}" method="POST">
                    <h3>Serviços </h3>
                        @csrf

                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Digite seu Nome *" required>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="empresa" name="inputEmpresa" placeholder="Nome da empresa *" required>
                            </div>
                            <div class="form-group col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Digite seu Email *" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" placeholder="Digite seu CPF *" required>

                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <input id="cnpj" type="cnpj" class="form-control @error('cnpj') is-invalid @enderror" name="cnpj" value="{{ old('cnpj') }}" required autocomplete="cnpj" placeholder="Digite seu CNPJ *" required>

                                @error('cnpj')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Digite seu Telefone *" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="endereco" name="telefone" placeholder="Seu endereço *" required>
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="numero" name="numero" placeholder="Número *" required>
                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP ">
                            </div>

                            <div class="form-group col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Crie uma senha ">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme sua senha ">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-braindev"> {{ __('Salvar') }} </button>
                    </form>
                </div>


                <div class="meus-depoimentos text-left hide">

                    
                    <form class="container formCheckout" action="{{ route('register') }}" method="POST">
                    <h3>Depoimentos</h3>
                        @csrf

                            <div class="form-row">
                            <div class="form-group col-md-12">
                                <input id="name-depoimento" type="text" class="form-control @error('name-depoimento') is-invalid @enderror" name="name-depoimento" value="{{ old('name-depoimento') }}" required autocomplete="name-depoimento" placeholder="Digite um Nome" required>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="depoimento" name="depoimento" placeholder="depoimento">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-braindev"> {{ __('Salvar') }} </button>
                    </form>
                </div>



    
            </div>
        </div>

    </div>
</main>

<script src="js/script.js"></script>
@endsection
