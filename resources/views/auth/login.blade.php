@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center" style="padding: 3rem;">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <h2 class="text-center mb-4"><i class="bi bi-box-arrow-in-right"></i> Login</h2>
                    
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail">
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password" placeholder="Digite sua senha">
                        </div>
                        
                        <button type="submit" class="btn btn-primary w-100">Entrar</button>
                        
                        <div class="text-center mt-3">
                            <a href="/recuperar-senha">Esqueceu sua senha?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection