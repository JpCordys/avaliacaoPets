@extends('layouts.app')

@section('content')

    <nav aria-label="breadcrumb" class="p-3 bg-custom-light">
        <div class="container">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item fs-sm"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item fs-sm"><a href="{{ url('adotar') }}">Quero Adotar</a></li>
                <li class="breadcrumb-item fs-sm"><a href="{{ route('integra.detalhe', $animal->id) }}">{{ $animal->nome }}</a></li>
                <li class="breadcrumb-item active fs-sm" aria-current="page">Formulário de Solicitação</li>
            </ol>
        </div>
    </nav>

    <section class="bg-light py-5">
        <div class="container mb-5">
            <h2 class="m-0 bowlby-one text-uppercase h5 text-center">Solicitação de adoção</h2>

            <p class="text-center">Preencha aqui os dados da pessoa interessada em adotar o animal selecionado:</p>

            <form action="" class="bg-custom rounded p-4 mt-4 col-6 mx-auto row">
                <div class="form-group py-2 col-12">
                    <label for="solicitante" class="text-capitalize text-light">Seu nome:</label>
                    <input type="text" class="form-control" name="solicitante" id="solicitante">
                </div>

                <div class="form-group py-2 col-12">
                    <label for="animal" class="text-capitalize text-light">Nome <span class="text-lowercase">do</span> animal:</label>
                    <input type="text" class="form-control" name="animal" id="animal" value="{{ $animal->nome }}" disabled>
                </div>

                <div class="form-group py-2 col-6">
                    <label for="cpf" class="text-capitalize text-light">CPF:</label>
                    <input type="text" class="form-control" name="cpf" id="cpf">
                </div>

                <div class="form-group py-2 col-6">
                    <label for="email" class="text-capitalize text-light">E-mail:</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>

                <div class="form-group py-2 col-6">
                    <label for="cel" class="text-capitalize text-light">Celular:</label>
                    <input type="text" class="form-control" name="cel" id="cel">
                </div>

                <div class="form-group py-2 col-6">
                    <label for="nascimento" class="text-capitalize text-light">Data <span class="text-lowercase">de</span> Nascimento:</label>
                    <input type="text" class="form-control" name="nascimento" id="nascimento">
                </div>

                <div class="col-12 d-flex justify-content-center mt-4">
                    <button class="btn btn-custom-2">Solicitar</button>
                </div>
            </form>
        </div>
    </section>

    <section class="bg-custom py-3" style="background-color: #FFECCE;">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center gap-3">
                <div class="d-flex flex-column align-items-end">
                    <h2 class="bowlby-one text-uppercase h4 m-0">Alguma dúvida?</h2>

                    <a href="#" class="btn btn-custom">Entre em contato</a>
                </div>
                <img src="{{ asset('img/cartoon-cat-3.webp') }}" alt="Gato" width="150">
            </div>
        </div>
    </section>

@endsection
