@extends('app')
@section('title', 'EGAP Torneios: Mario Power Tennis')

@section('content')
    <div class="container mt-5">
        <div class="card text-center mx-auto d-block" style="width: 50%;">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
                <form action="{{ route('registro.login') }}">
                    @csrf
              <h5 class="card-title">Email</h5>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" name="hotmail">
              </div>
              @error('hotmail')
                <div class="text-danger small mt-1">
                {{ $message }}
                </div>
                @enderror
              <p class="card-text">Senha</p>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">*</span>
                <input type="password" class="form-control" id="password-field" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1" name="senha">
                <button class="btn btn-outline-secondary" type="button" id="toggle-password">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                      </svg>
                </button>
            </div>
            @error('senha')
                <div class="text-danger small mt-1">
                {{ $message }}
                </div>
            @enderror
            </div>
            <div class="card-footer text-body-secondary">
                <button type="submit" class="btn btn-primary">INSCREVER-SE</button>
                <a href="{{ route('site.registro') }}">Faça seu novo cadastro</a>
            </div>
        </form>
          </div>
    </div>
    <script>
        document.getElementById("toggle-password").addEventListener("click", function () {
            var passwordField = document.getElementById("password-field");
            var icon = this.querySelector("i");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                icon.classList.remove("bi-eye");
                icon.classList.add("bi-eye-slash");
            } else {
                passwordField.type = "password";
                icon.classList.remove("bi-eye-slash");
                icon.classList.add("bi-eye");
            }
        });
        </script>
    <br>
    <br>
    <br>
@endsection
