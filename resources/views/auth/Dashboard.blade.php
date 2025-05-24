@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
  <div class="container-fluid py-5">
    <h1 class="h3 mb-2 text-gray-800"><i class="bi bi-speedometer2 me-2"></i>Dashboard</h1>
    <p class="mb-4"></p>

    <div class="row g-4">
        <!-- Card Usuários -->
        <div class="col-md-6 col-xl-3">
            <div class="card border-l-4 border-primary shadow h-100 p-3">
                <h5 class="card-title"><i class="bi bi-person-lines-fill me-2"></i>Usuários</h5>
                <p class="card-text">Gerencie usuários do sistema.</p>
                <a href="#" class="btn btn-primary btn-sm">Ver mais</a>
            </div>
        </div>





        <!-- Card Total de Serviços -->
        <div class="col-md-6 col-xl-3">
            <div class="card border-l-4 border-primary shadow h-100 p-3">
                <h5 class="card-title"><i class="bi bi-gear me-2"></i>Total de Serviços</h5>
                <p class="card-text">Total de serviços cadastrados: <strong></strong></p>
                <a href="#" class="btn btn-primary btn-sm">Ver mais</a>
            </div>
        </div>





        <!-- Card Orçamentos Aprovados -->
        <div class="col-md-6 col-xl-3">
            <div class="card border-l-4 border-green-600 shadow h-100 p-3">
                <h5 class="card-title"><i class="bi bi-check-circle me-2"></i> Orçamentos Aprovados</h5>
                <p class="card-text">Total de orçamentos aprovados: <strong></strong></p>
                <a href="#" class="btn btn-success btn-sm">Ver mais</a>
            </div>
        </div>



    <!-- Seção de Atividade Recente -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Últimos Orçamentos</h6>
                </div>
                <div class="card-body">
                    <p class="text-muted">Nenhum orçamento recente encontrado.</p>
                    <div class="table-responsive">
                        <table class="table table-bordered w-full">
                            <thead>
                                <tr>
                                    <th>Número</th>
                                    <th>Cliente</th>
                                    <th>Valor</th>
                                    <th>Status</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Tabela vazia para o backend preencher -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection