@extends('app')
@section('title', 'EGAP Torneios: Mario Power Tennis')

@section('content')
<div class="container mt-5">
    <div class="card text-center mx-auto d-block" style="width: 50%;">
        <div class="card-header">
          Faça seu cadastro
        </div>
        <div class="card-body">
            <form action="{{ route('registro.registro') }}" method="POST" id="registro-form">
                @csrf

                <!-- Nome -->
                <p class="card-text">Nome</p>
                <div class="input-group mb-3">
                    <span class="input-group-text">#</span>
                    <input type="text" class="form-control" placeholder="Nome" name="fulano" id="nome" required>
                </div>
                <div id="nome-error" class="text-danger small mt-1"></div>

                <!-- Email -->
                <p class="card-title">Email</p>
                <div class="input-group mb-3">
                    <span class="input-group-text">@</span>
                    <input type="email" class="form-control" placeholder="Email" name="hotmail" id="email" required>
                </div>
                <div id="email-error" class="text-danger small mt-1"></div>

                <!-- Celular -->
                <p class="card-text">Celular</p>
                <div class="input-group mb-3">
                    <span class="input-group-text">📱</span>
                    <input type="text" class="form-control" placeholder="(XX) XXXXX-XXXX" name="telemovel" id="celular" required>
                </div>
                <div id="celular-error" class="text-danger small mt-1"></div>

                <!-- Senha -->
                <p class="card-text">Senha</p>
                <div class="input-group mb-3">
                    <span class="input-group-text">*</span>
                    <input type="password" class="form-control" id="password-field" placeholder="Senha" name="senha" required>
                    <button class="btn btn-outline-secondary" type="button" id="toggle-password">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                        </svg>
                    </button>
                </div>
                <div id="password-error" class="text-danger small mt-1"></div>

        </div>
        <div class="card-footer text-body-secondary">
            <button type="submit" class="btn btn-primary" id="submit-btn" disabled>INSCREVER-SE</button>
        </div>
    </form>
    </div>
</div>

<script>
document.getElementById("toggle-password").addEventListener("click", function () {
    var passwordField = document.getElementById("password-field");
    if (passwordField.type === "password") {
        passwordField.type = "text";
    } else {
        passwordField.type = "password";
    }
});

function validarFormulario() {
    var nome = document.getElementById("nome").value.trim();
    var email = document.getElementById("email").value.trim();
    var celular = document.getElementById("celular").value.trim();
    var senha = document.getElementById("password-field").value.trim();

    var nomeError = document.getElementById("nome-error");
    var emailError = document.getElementById("email-error");
    var celularError = document.getElementById("celular-error");
    var passwordError = document.getElementById("password-error");

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var celularRegex = /^\(\d{2}\) \d{5}-\d{4}$/; // Formato (XX) XXXXX-XXXX
    var isValid = true;

    // Validação do Nome
    if (nome === "") {
        nomeError.textContent = "O nome não pode estar vazio.";
        isValid = false;
    } else {
        nomeError.textContent = "";
    }

    // Validação do Email
    if (!emailRegex.test(email)) {
        emailError.textContent = "Formato de email inválido.";
        isValid = false;
    } else {
        emailError.textContent = "";
    }

    // Validação do Celular
    if (!celularRegex.test(celular)) {
        celularError.textContent = "Formato de celular inválido. Use (XX) XXXXX-XXXX.";
        isValid = false;
    } else {
        celularError.textContent = "";
    }

    // Validação da Senha
    if (senha.length < 6 || senha.length > 20) {
        passwordError.textContent = "A senha deve ter entre 6 e 20 caracteres.";
        isValid = false;
    } else {
        passwordError.textContent = "";
    }

    // Ativar/Desativar botão de envio
    document.getElementById("submit-btn").disabled = !isValid;
}

// Formatar número de celular enquanto o usuário digita
document.getElementById("celular").addEventListener("input", function (e) {
    var value = e.target.value.replace(/\D/g, "");
    if (value.length > 2) value = `(${value.slice(0,2)}) ${value.slice(2)}`;
    if (value.length > 10) value = `${value.slice(0,10)}-${value.slice(10,14)}`;
    e.target.value = value;
});

// Monitorar mudanças nos campos para ativar/desativar botão
document.getElementById("nome").addEventListener("input", validarFormulario);
document.getElementById("email").addEventListener("input", validarFormulario);
document.getElementById("celular").addEventListener("input", validarFormulario);
document.getElementById("password-field").addEventListener("input", validarFormulario);
</script>
@endsection
