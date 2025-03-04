@extends('app')
@section('title', 'EGAP Torneios: Mario Power Tennis')

@section('content')
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Inscrever-se</h5>
    </div>
    <form action="{{ route('site.inscrever', auth()->user()->id ) }}" method="POST">
        @csrf
        <select class="form-select" aria-label="Default select example" name="qualquercoisa">
        @foreach ($personagens as $umnome)
            <option value="{{ $umnome->id }}">{{$umnome->nome}}</option>
        @endforeach
      </select>
    <div class="card-body">
        <button type="submit" class="btn btn-primary btn-lg">Inscrever-se</button>
    </form>
        <a href="{{ route('site.personagens') }}" class="card-link">Ver personagens</a>
    </div>
  </div>
@endsection
