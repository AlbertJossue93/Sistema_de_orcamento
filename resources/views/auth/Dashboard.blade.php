    @extends('layouts.app')
    @section('title', 'Dashboard')
    @section('content')


   <div class="container-fluid py-5">
    <h1 class="h3 mb-2 text-gray-800"><i class="bi bi-speedometer2 me-2"></i>Dashboard</h1>
    <p class="mb-4">Bem-vindo ao Sistema de Orçamentos, !</p>

    <div class="row g-4">
        <!-- Card Usuários -->
        <div class="col-md-6 col-xl-3">
            <div class="card border-start border-primary shadow h-100 p-3">
                <h5 class="card-title"><i class="bi bi-person-lines-fill me-2"></i>Usuários</h5>
                <p class="card-text">Gerencie usuários do sistema.</p>
                <a href="#" class="btn btn-primary btn-sm">Ver mais</a>
                </div>
                </div>

                 <!-- Total de Serviços -->
        <div class="col-md-6 col-xl-3">
            <div class="card border-start border-primary shadow h-100 p-3">
                <h5 class="card-title"><i class="bi bi-gear me-2"></i>Total de Serviços</h5>
                <p class="card-text">Total de serviços cadastrados: </strong></p>
                <a href="#" class="btn btn-primary btn-sm">Ver mais</a>
            </div>
        </div>

        <!-- Card Orçamentos Aprovados -->
        <div class="col-md-6 col-xl-3">
            <div class="card border-start border-success shadow h-100 p-3">
                <h5 class="card-title"><i class="bi bi-check-circle me-2"></i>Orçamentos Aprovados</h5>
                <p class="card-text">Total de orçamentos aprovados: </p>
                <a href="#" class="btn btn-success btn-sm">Ver mais</a>
                
                
            </div>
        </div>
