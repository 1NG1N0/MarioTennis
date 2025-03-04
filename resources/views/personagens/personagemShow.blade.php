@extends('app')
@section('title', 'Personagens')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg p-4 position-relative">
                <div class="row g-4 align-items-center">
                    <!-- Imagem do Personagem -->
                    <div class="col-md-5 text-center">
                        <img src="{{ asset($personagem->imagem) }}"
                             class="img-fluid rounded"
                             alt="Imagem de {{ $personagem->nome }}"
                             style="max-height: 900px; object-fit: cover; width: 80%">
                    </div>

                    <!-- Informações do Personagem -->
                    <div class="col-md-7">
                        <h1 class="fw-bold text-primary">{{ $personagem->nome }}</h1>
                        <h4 class="text-muted">Tipo: {{ ucfirst($personagem->status) }}</h4>
                        <hr>
                        <div class="text-dark fs-5">
                            {!! $personagem->descricao !!}
                        </div>
                        <hr>
                        <h5 class="fw-bold">Atributos:</h5>
                        <div class="text-dark fs-6">
                            {!! $personagem->stats !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection
