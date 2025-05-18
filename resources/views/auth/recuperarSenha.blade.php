@extends('layouts.app')
@section('title', 'recuperarSenha')
@section('content')

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row justify-content-center w-100">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
            <div class="card shadow p-4">
               <h4 class="text-center mb-4">  
                <i class="bi bi-lock me-2"></i>Recuperar Senha
               </h4>
            
         <p class="text-center text-muted mb-4">Informe seu e-mail para receber o link de redefinição.</p>


          <form method="POST" action="#">
                    @csrf

   <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="Email" class="form-control form-control-lg" name="email" placeholder="Digite seu email" required 
    >

        </div>

        <div class="d-grid">
        <button type="submit" class="btn btn-warning btn-lg">
                           Enviar link de recuperação
                        
                        
                        </button>

                    </div>
        
                  </div>
            
            </div>
            
      </div>
            