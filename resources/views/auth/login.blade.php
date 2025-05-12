@extends('layouts.app')
@section('title', 'Login')

@section('content')


<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row justify-content-center w-100">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
            <div class="card shadow p-4 login-card">
                <div class="card-body">
                    <h4 class="text-center mb-4">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Login
                    </h4>

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                             {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <!-- Campo Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <div class="input-group">
                                <span class="input-group-text input-icon">
                                    <i class="bi bi-envelope-fill"></i>
                                </span>
                                <input type="email" name="email" class="form-control form-control-lg" 
                                       placeholder="Digite seu Email" required autofocus>
                            </div>
                        </div>

                        <!-- Campo Senha -->
                        <div class="mb-4"> 
                            <label for="password" class="form-label">Senha</label>
                            <div class="input-group">
                                <span class="input-group-text input-icon">
                                    <i class="bi bi-lock-fill"></i>
                                </span>
                                <input type="password" name="password" class="form-control form-control-lg" 
                                       placeholder="Digite sua senha" required>
                            </div>
                        </div>

                        <!-- Botão de Login -->
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-box-arrow-in-right me-2"></i>Entrar
                            </button>
                        </div>

                        <!-- Divisor -->
                        <div class="divider">
                            <span class="divider-text">OU</span>
                        </div>

                        <!-- Links adicionais -->
                        <div class="text-center mb-2">
                            <a href="#" class="text-decoration-none">
                                <i class="bi bi-key-fill me-1"></i>Esqueceu sua senha?
                            </a>
                        </div>

                        <div class="text-center mt-3 pt-3 border-top">
                            <span class="text-muted">Não tem uma conta?</span>
                            <a href="#" class="text-decoration-none ms-1">
                                <i class="bi bi-person-plus-fill me-1"></i>Cadastre-se
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




