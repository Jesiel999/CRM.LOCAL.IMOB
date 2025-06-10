<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imobiliária CRM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .sidebar.collapsed {
            width: 64px;
        }
        .sidebar.collapsed .sidebar-text, .sidebar.collapsed .logo-text, .sidebar.collapsed .img-foto{
            display: none;
        }
        .sidebar.collapsed .menu-item {
            justify-content: center;
        }
        .sidebar .menu-item {
            justify-content: flex-start;
        }
        .sidebar.collapsed .fa-chevron-left{
            transform: rotate(180deg);
        }
        .file-upload input {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;z
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
        .image-preview {
            max-height: 150px;
            margin-top: 10px;
        }
        .document-preview {
            background-color: #f3f4f6;
            border-radius: 0.375rem;
            padding: 0.5rem;
            margin-top: 0.5rem;
            display: flex;
            align-items: center;
        }
        [x-cloak] { display: none !important; }
        .property-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .status-badge {
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
            border-radius: 9999px;
        }
        .tag {
            display: inline-block;
            background-color: #e0f2fe;
            color: #0369a1;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.75rem;
            margin-right: 0.25rem;
            margin-bottom: 0.25rem;
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .property-image {
            transition: transform 0.3s ease;
        }
        .property-image:hover {
            transform: scale(1.03);
        }
        .amenity-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: #EFF6FF;
            color: #3B82F6;
        }
        .map-container {
            height: 300px;
            width: 100%;
        }
        .thumbnail {
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .thumbnail:hover {
            opacity: 0.8;
            border: 2px solid #3B82F6;
        }
        .thumbnail.active {
            border: 2px solid #3B82F6;
        }
        .tab-button {
            transition: all 0.3s ease;
        }
        .tab-button.active {
            border-bottom: 3px solid #3B82F6;
            color: #3B82F6;
            font-weight: 600;
        }
    </style>
</head>
<script src="public/assets/js/script.js"></script>
    <body class="bg-gray-100 font-sans">
        <div class="flex h-screen overflow-hidden">
            <div id="sidebar" class="sidebar bg-blue-800 text-white w-64 md:w-64 collapsed:md:w-20 flex-shrink-0 flex flex-col transition-all duration-300">
                <div class="p-4 flex items-center justify-center md:justify-start">
                    <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-blue-800 font-bold text-xl">
                        <i class="fas fa-home"></i>
                    </div>
                    <span class="logo-text ml-3 text-xl font-bold hidden md:block">ALT IMOB</span>
                </div>

                <nav class="flex-1 overflow-y-auto px-4">
                    <p class="text-xs uppercase font-bold text-blue-200 mb-4 tracking-wider sidebar-text">Menu Principal</p>
                    
                    <button onclick="sidebar('admin/imoveis/index.php'); setPageTitle('Imóveis')" class="w-full flex items-center gap-3 px-2 py-3 rounded-lg hover:bg-blue-700">
                        <i class="fas fa-building"></i>
                        <span class="sidebar-text">Imóveis</span>
                    </button>
                    <button onclick="sidebar('admin/clientes/index.php'); setPageTitle('Clientes')" class="w-full flex items-center gap-3 px-2 py-3 rounded-lg hover:bg-blue-700">
                        <i class="fas fa-user"></i>
                        <span class="sidebar-text">Clientes</span>
                    </button>
                    <button onclick="sidebar('/admin/dashboard/index.php'); setPageTitle('Relatórios e Análises')" class="w-full flex items-center gap-3 px-2 py-3 rounded-lg hover:bg-blue-700">
                        <i class="fas fa-chart-bar"></i>
                        <span class="sidebar-text">Relatórios</span>
                    </button>
                    <button onclick="sidebar('/admin/agenda/index.php'); setPageTitle('Agenda de Visitas e Compromissos')" class="w-full flex items-center gap-3 px-2 py-3 rounded-lg hover:bg-blue-700">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="sidebar-text">Agenda</span>
                    </button>

                    <p class="text-xs uppercase font-bold text-blue-200 mt-8 mb-4 tracking-wider sidebar-text">Configurações</p>
                    <button class="w-full flex items-center gap-3 px-2 py-3 rounded-lg hover:bg-blue-700">
                        <i class="fas fa-cog"></i>
                        <span class="sidebar-text">Configurações</span>
                    </button>
                    <button onclick="sidebar('/core/loghout.php');" class="w-full flex items-center gap-3 px-2 py-3 rounded-lg hover:bg-blue-700">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="sidebar-text">Sair</span>
                    </button>
                </nav>

                <div class="p-4 border-t border-blue-700 flex items-center justify-between">
                    <div class="img-foto flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="w-8 h-8 rounded-full">
                        <div class="ml-3 sidebar-text">
                            <div class="text-sm font-medium">Maria Silva</div>
                            <div class="text-xs text-blue-200">Corretor</div>
                        </div>
                    </div>
                    <button class="text-blue-200 hover:text-white" id="toggle-sidebar">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                </div>
            </div>

            <div class="content-area flex-1 overflow-auto">
                <header class="bg-white shadow-sm">
                    <div class="px-6 py-4 flex items-center justify-between">
                        <h1 class="text-2xl font-bold text-gray-800" id="page-title">Relatórios e Análises </h1>
                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <input type="text" placeholder="Buscar..." class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                            </div>
                            <button class="p-2 text-gray-500 hover:text-gray-700">
                                <i class="fas fa-bell"></i>
                            </button>
                        </div>
                    </div>
                </header>

                <main id="conteudo" class="p-6">
                </main>
                <script src="public/assets/js/carrosel.js"></script>
                <script src="public/assets/js/exibirClient.js"></script>
            </div>
        </div>
    </body>
</html>