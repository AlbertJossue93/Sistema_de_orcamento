<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Sistema de Orçamento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    
    <!-- Fonte Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-50 font-sans">
    <!-- Sidebar -->
    <div id="sidebar" class="fixed flex flex-col h-screen w-64 bg-gradient-to-b from-gray-800 to-gray-900 text-white z-50 transition-all duration-300 md:translate-x-0 -translate-x-full">
        <div class="font-semibold text-xl p-5 text-center bg-gray-900">
            <i class="bi bi-tools mr-2"></i>Sistema de Orçamento
        </div>

        <ul class="px-3 space-y-1 mt-4">
            <li>
                <a href="#" class="flex items-center py-2 px-3 rounded hover:bg-white/10 transition-colors">
                    <i class="bi bi-house mr-2"></i>Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center py-2 px-3 rounded hover:bg-white/10 transition-colors">
                    <i class="bi bi-person mr-2"></i>Usuários
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center py-2 px-3 rounded hover:bg-white/10 transition-colors">
                    <i class="bi bi-gear mr-2"></i>Serviços
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center py-2 px-3 rounded hover:bg-white/10 transition-colors">
                    <i class="bi bi-envelope mr-2"></i>Comunicação
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center py-2 px-3 rounded hover:bg-white/10 transition-colors">
                    <i class="bi bi-cash-stack mr-2"></i>Orçamento
                </a>
            </li>
        </ul>
    </div>

    <!-- Conteúdo -->
    <div class="ml-0 md:ml-64 transition-all duration-300">
        <!-- Topbar -->
        <div class="bg-white shadow-sm px-5 py-3 flex flex-col md:flex-row md:items-center justify-between gap-3">
            <div class="flex items-center">
                <button id="sidebarToggle" class="md:hidden mr-3 p-1 rounded-md text-gray-700 hover:bg-gray-100">
                    <i class="bi bi-list text-xl"></i>
                </button>
                <h5 class="text-lg font-medium">@yield('title')</h5>
            </div>
            
            <div class="flex w-full md:w-auto">
                <input type="text" class="px-3 py-1 border border-gray-300 rounded-l-md focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 w-full" placeholder="Pesquisar...">
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded-r-md">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>

        <!-- Conteúdo da página -->
        <main class="p-5">
            @yield('content')
        </main>
    </div>
</html>

