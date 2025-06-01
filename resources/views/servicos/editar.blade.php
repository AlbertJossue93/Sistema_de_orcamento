@extends('layouts.app')

@section('title', 'editar')

@section('content')

 @include('sidbar')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="mb-4 text-center">
                       <i class="bi bi-pencil-square me-2"></i>Editar Serviço
    
                     </h4>
         <!-- Exemplo de exibição de mensagens (opcional) -->

      

                        <!-- Nome do serviço -->
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome do Serviço</label>
                            <input type="text" name="nome" id="nome" class="form-control"
                                value="{{ $servico->nome ?? 'Instalação de câmeras' }}" required>
                        </div>


                           <!-- Tipo do serviço -->
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo de Serviço</label>
                            <select name="tipo" id="tipo" class="form-select" required>
                                <option value="Manutenção" {{ ($servico->tipo ?? '') == 'Manutenção' ? 'selected' : '' }}>Manutenção</option>
                                <option value="Instalação" {{ ($servico->tipo ?? '') == 'Instalação' ? 'selected' : '' }}>Instalação</option>
                                <option value="Consultoria" {{ ($servico->tipo ?? '') == 'Consultoria' ? 'selected' : '' }}>Consultoria</option>
                                <option value="Outro" {{ ($servico->tipo ?? '') == 'Outro' ? 'selected' : '' }}>Outro</option>
                            </select>
                        </div>

                        <!-- Valor do serviço -->
                        <div class="mb-4">
                            <label for="valor" class="form-label">Valor (R$)</label>
                            <input type="number" step="0.01" name="valor" id="valor" class="form-control"
                                value="{{ $servico->valor ?? '250.00' }}" required>
                        </div>

                        <!-- Botão de atualização -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check2-square me-2"></i>Atualizar Serviço
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection