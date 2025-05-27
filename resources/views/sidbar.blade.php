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

