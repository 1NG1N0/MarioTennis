@extends('app')
@section('title', 'EGAP Torneios: Mario Power Tennis')

@section('content')
<div class="container mt-4 d-flex justify-content-center">
    <div class="bg-light p-3 rounded shadow" style="display: inline-block;">
        <div class="row justify-content-center">
            @foreach ($personagens as $personagem)
                <div class="col-md-2 mb-3 d-flex justify-content-center">
                    <a href="{{ route('site.personagem', [$personagem->nome, $personagem->id])}}">
                    <div class="card d-flex flex-column align-items-center text-center" style="width: 11rem; height: 13rem;">
                        <img src="{{ asset($personagem->imagem) }}" class="card-img-top mt-2" alt="{{ $personagem->nome }}" style="max-height: 90px; object-fit: contain;">
                        <div class="card-body p-2 d-flex flex-column flex-grow-1 justify-content-end">
                            <h6 class="card-title mb-1">{{ $personagem->nome }}</h6>
                            <p class="card-text text-muted" style="font-size: 0.85rem;">{{ $personagem->status }}</p>
                        </div>
                    </div>
                    </a>
                </div>
                @if ($loop->iteration % 6 == 0 && !$loop->last)
                    </div><div class="row justify-content-center">
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection
