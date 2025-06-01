@extends('layouts.app')

@section('title', 'cadastrarServico')

@section('content')

 @include('sidbar')
 
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="card shadow-sm">
                <div class="card-body">
                <h4 class=" mb-4 text-center">
                    <i class="bi bi-plus-circle me-2"></i> Cadastrar novo servico
                </h4>
                <form method="POST" action="#">
                        @csrf
                       <!-- Nome do serviço -->
                      
                       

                       <div class="mb-3">
                        <label for="tipo" class="form-label">>Tipo de Serviço</label>
                        <select name="tipo" id="tipo" class="form-select" required>
                            <option value="">selecione</option>
                            <option value="Manutenção">Manuntenção</option>
                            <option value="Instalação">Instalação</option>
                            <option value="Consultoria">Consultoria</option>
                            <option value="outro">outro</option>
                        </select>
                        
                       </div>


                        <!-- Valor do serviço -->
                        <div class="mb-4">
                            <label for="valor" class="form-label">Valor (R$)</label>
                            <input type="number" step="0.01" name="valor" id="valor" class="form-control" placeholder="Ex: 250.00" required>
                        </div>

                             <!-- Botão de envio -->

                             <div class="d-grid">
                                <button type="submit" class="btn btn-primary">salvar serviço

                                </button>
                             </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection