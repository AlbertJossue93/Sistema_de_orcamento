<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Sistema de Orçamento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
 
@vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>
        body {
            background-color: #f8f8f8;
           font-family: 'Poppins';
        }
            .sidebar {
            @apply bg-gradient-to-b from-gray-800 to-gray-900 text-white min-h-screen fixed w-64;
            transition: margin-left 0.3s ease;

          
            }
        .sidebar.collapsed {
            @apply w-16;
         }
        
        .topbar {
            @apply bg-white shadow-md;
        }
        .content-wrapper {
            @apply ml-64 transition-all duration-300;
        }
        .sidebar-collapsed .content-wrapper {
            @apply ml-16;
        }
       
    </style>

</head>

<body class="flex">
    <!-- Page Wrapper -->
    <div id="wrapper" class="flex flex-col flex-1">

        <!-- Sidebar -->
        <ul id="accordionSidebar" class="sidebar">
            <!-- Sidebar - Brand -->
            <a href="#" class="sidebar-brand flex items-center justify-center py-4">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="bi bi-tools text-black text-2xl"></i>

                </div>
            <div class="sidebar-brand-text mx-3 text-black font-bold">Sistema de Orçamento</div>

            
            </a>

            <!-- Divider -->

            <hr class="border-gray-700 my-0">


           <!-- Divider -->
            <li class="bg-gray-700 my-0 nav-item">
                <a href="#" class="nav-link flex items-center py-2 px-4 text-black hover: bg-gray-700">

                
                <i class="bi bi-house me-2"></i>
                <span>Dasboard</span>
              </a>
            </li>
            
            <!-- Divider -->
            <hr class="border-gray-700">
            <!-- Heading -->
            <div class="sidebar-heading text-xs uppercase text-balck-400 px-4 py-2">
                Gestão
            </div>
            <!-- Nav Item - Gestão de Usuários -->
            <li class="nav-item">
                <a href="#" class="nav-link flex items-center py-2 px-4 text-black hover:bg-gray-700">
                    <i class="bi bi-person me-2"></i>
                    <span>Usuários</span>
                </a>
            </li>
        


            <!-- Nav Item - Gestão de Serviços -->
            <li class="nav-item">
                <a href="#" class="nav-link flex items-center py-2 px-4 text-white hover:bg-gray-700">
                    <i class="bi bi-gear me-2"></i>
                    <span>Serviços</span>
                </a>
            </li>
            <!-- Nav Item - Gestão de Comunicação -->

            <li class="nav-item">
                <a href="#" class="nav-link flex items-center py-2 px-4 text-white hover:bg-gray-700">
                    <i class="bi bi-envelope me-2"></i>
                    <span>Comunicação</span>
                </a>
            </li>
            <!-- Nav Item - Gestão de orçamento -->
             <li class="nav-item">
                <a href="#" class="nav-link flex items-center py-2 px-4 text-white hover:bg-gray-700">
                    <i class="bi bi-envelope me-2"></i>
                    <span>Orçamento</span>
                </a>
            </li>


            <!-- Divisão -->
            <hr class="border-gray-700">
            <!-- Sidebar  -->
            <div class="text-center py-2">
                <button id="sidebarToggle" class="rounded-full bg-gray-700 text-white p-2 focus:outline-none">
                    <i class="bi bi-list"></i>
                </button>
            </div>
        </ul>   
        

            <hr class="border-gray-700">
            <!-- Sidebar -->
            <div class="text-center py-2">
                <button id="sidebarToggle" class="rounded-full bg-gray-700 text-white p-2 focus:outline-none">
                    <i class="bi bi-list"></i>
                </button>
            </div>
        </ul>
        <!-- final do sidebar -->
         <!-- Content Wrapper -->
        <div id="content-wrapper" class="content-wrapper flex-1">
            <!-- -->
               <div id="content">
                <!--  -->
                <nav class="topbar flex items-center justify-between px-4 py-2">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-full mr-3 focus:outline-none">
                        <i class="bi bi-list text-gray-600"></i>
                    </button>
               </div>
                    <!-- Topbar de busca -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0">
                        <div class="input-group">
                            <input type="text" class="form-control bg-gray-100 border-0 rounded-l-lg py-2 px-3"
                                placeholder="Pesquisar..." aria-label="Search">
                            <button class="btn bg-primary text-white rounded-r-lg py-2 px-3" type="button">
                                <i class="bi bi-search"></i>
                            </button>
                         </div>
                        
                    </form>

              </div>

       </div>
     @yield('content')
     
</body>
</html>
