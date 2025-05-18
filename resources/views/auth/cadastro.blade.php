@extends('layouts.app')
@section('tittle', 'cadastro')

@section('content')


<div class="container d-flex justify-content-center align-item-center min-vh-100">
    <div class="row w-100 justify-content-center">
    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
        <div class="card shadow p-4 p-md-5 ">
        
            <h4 class="text-center mb-4"> Cadastro de Usuario </h4>

            <form method="POST" action="{{ route('cadastro') }}">
                @csrf
               <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" required>
                 <label for="Email" class="form-label">Email</label>
                <input type="text" class="form-control" id="Email" name="Email"  required>
              
                <label for="Cpf" class="form-label">Cpf</label>
                <input type="text" class="form-control" id="Cpf" placeholder="000.000.000-00"  name="Cpf" required>
                <label for="senha" class="form-label"> senha</label>
                <input type="password" class= "form-control" id="senha" name="senha" required>
                
               </div>
                
               <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
               
            </form>
        </div>
    </div>
    </div>
</div>