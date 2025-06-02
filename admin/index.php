<!-- Properties Tab -->
<div id="properties-tab" class="tab-content active">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-gray-800">Gerenciamento de Imóveis</h2>
        <div class="flex space-x-3">
            <button onclick="showPropertyForm()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
                <i class="fas fa-plus mr-2"></i> Adicionar Imóvel
            </button>
            <button class="border border-gray-300 hover:bg-gray-50 text-gray-700 px-4 py-2 rounded-lg flex items-center">
                <i class="fas fa-filter mr-2"></i> Filtros
            </button>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow mb-6">
        <div class="p-4 border-b flex justify-between items-center">
            <div class="flex space-x-4">
                <button class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg">Todos</button>
                <button class="px-4 py-2 hover:bg-gray-100 rounded-lg">Disponíveis</button>
                <button class="px-4 py-2 hover:bg-gray-100 rounded-lg">Alugados</button>
                <button class="px-4 py-2 hover:bg-gray-100 rounded-lg">Vendidos</button>
                <button class="px-4 py-2 hover:bg-gray-100 rounded-lg">Em Negociação</button>
            </div>
            <div class="flex items-center space-x-2">
                <span class="text-sm text-gray-500">Visualização:</span>
                <button onclick="setPropertyView('grid')" class="p-2 hover:bg-gray-100 rounded-lg">
                    <i class="fas fa-th-large"></i>
                </button>
                <button onclick="setPropertyView('list')" class="p-2 hover:bg-gray-100 rounded-lg">
                    <i class="fas fa-list"></i>
                </button>
            </div>
        </div>
    </div>

    <div id="property-grid-view" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="property-card bg-white rounded-lg shadow overflow-hidden transition duration-300 ease-in-out">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Property" class="w-full h-48 object-cover">
                <div class="absolute top-2 right-2">
                    <span class="status-badge bg-green-100 text-green-800">Disponível</span>
                </div>
                <div class="absolute bottom-2 left-2">
                    <span class="status-badge bg-blue-100 text-blue-800">Venda: R$ 1.200.000</span>
                </div>
            </div>
            <div class="p-4">
                <div class="flex justify-between items-start">
                    <h3 class="text-lg font-semibold">Casa com Piscina</h3>
                    <span class="text-sm text-gray-500">#PROP001</span>
                </div>
                <p class="text-gray-600 text-sm mt-1">Jardim Europa, São Paulo - SP</p>
                
                <div class="mt-3 flex flex-wrap">
                    <span class="text-sm text-gray-500 mr-3"><i class="fas fa-bed mr-1"></i> 3 quartos</span>
                    <span class="text-sm text-gray-500 mr-3"><i class="fas fa-bath mr-1"></i> 2 banheiros</span>
                    <span class="text-sm text-gray-500"><i class="fas fa-car mr-1"></i> 2 vagas</span>
                </div>
                
                <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                    <div>
                        <span class="text-xs text-gray-500">Área útil:</span>
                        <span class="text-sm font-medium">120 m²</span>
                    </div>
                    <div class="flex space-x-2">
                        <button class="p-2 text-blue-600 hover:text-blue-800">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="p-2 text-yellow-600 hover:text-yellow-800">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="p-2 text-red-600 hover:text-red-800">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="property-card bg-white rounded-lg shadow overflow-hidden transition duration-300 ease-in-out">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Property" class="w-full h-48 object-cover">
                <div class="absolute top-2 right-2">
                    <span class="status-badge bg-yellow-100 text-yellow-800">Alugado</span>
                </div>
                <div class="absolute bottom-2 left-2">
                    <span class="status-badge bg-blue-100 text-blue-800">Locação: R$ 3.500/mês</span>
                </div>
            </div>
            <div class="p-4">
                <div class="flex justify-between items-start">
                    <h3 class="text-lg font-semibold">Apartamento Moderno</h3>
                    <span class="text-sm text-gray-500">#PROP002</span>
                </div>
                <p class="text-gray-600 text-sm mt-1">Moema, São Paulo - SP</p>
                
                <div class="mt-3 flex flex-wrap">
                    <span class="text-sm text-gray-500 mr-3"><i class="fas fa-bed mr-1"></i> 2 quartos</span>
                    <span class="text-sm text-gray-500 mr-3"><i class="fas fa-bath mr-1"></i> 2 banheiros</span>
                    <span class="text-sm text-gray-500"><i class="fas fa-car mr-1"></i> 1 vaga</span>
                </div>
                
                <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                    <div>
                        <span class="text-xs text-gray-500">Área útil:</span>
                        <span class="text-sm font-medium">75 m²</span>
                    </div>
                    <div class="flex space-x-2">
                        <button class="p-2 text-blue-600 hover:text-blue-800">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="p-2 text-yellow-600 hover:text-yellow-800">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="p-2 text-red-600 hover:text-red-800">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- More property cards... -->
    </div>

    <!-- Property List View (Hidden by default) -->
    <div id="property-list-view" class="hidden bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Código</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Imóvel</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipo</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Endereço</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Valor</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#PROP001</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">Casa com Piscina</div>
                                    <div class="text-sm text-gray-500">3 quartos, 2 banheiros</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Casa</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rua das Flores, 123 - Jardins</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">R$ 1.200.000</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Disponível</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-eye"></i></button>
                            <button class="text-yellow-600 hover:text-yellow-900 mr-3"><i class="fas fa-edit"></i></button>
                            <button class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <!-- More property rows... -->
                </tbody>
            </table>
        </div>
        <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
            <div class="flex-1 flex justify-between sm:hidden">
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Anterior </a>
                <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Próximo </a>
            </div>
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-gray-700">
                        Mostrando <span class="font-medium">1</span> a <span class="font-medium">10</span> de <span class="font-medium">97</span> resultados
                    </p>
                </div>
                <div>
                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Previous</span>
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="#" aria-current="page" class="z-10 bg-blue-50 border-blue-500 text-blue-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 1 </a>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 2 </a>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 3 </a>
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Next</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Clients Tab -->
<div id="clients-tab" class="tab-content">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-gray-800">Gerenciamento de Clientes</h2>
        <div class="flex space-x-3">
            <button onclick="showClientForm()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
                <i class="fas fa-plus mr-2"></i> Adicionar Cliente
            </button>
            <button class="border border-gray-300 hover:bg-gray-50 text-gray-700 px-4 py-2 rounded-lg flex items-center">
                <i class="fas fa-filter mr-2"></i> Filtros
            </button>
        </div>
    </div>

    <!-- Client List -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="p-4 border-b flex justify-between items-center">
            <div class="flex space-x-4">
                <button class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg">Todos</button>
                <button class="px-4 py-2 hover:bg-gray-100 rounded-lg">Compradores</button>
                <button class="px-4 py-2 hover:bg-gray-100 rounded-lg">Locatários</button>
                <button class="px-4 py-2 hover:bg-gray-100 rounded-lg">Proprietários</button>
                <button class="px-4 py-2 hover:bg-gray-100 rounded-lg">Investidores</button>
            </div>
            <div class="flex items-center">
                <span class="text-sm text-gray-500 mr-2">Ordenar por:</span>
                <select class="border rounded-lg px-3 py-1 text-sm">
                    <option>Mais recente</option>
                    <option>Nome (A-Z)</option>
                    <option>Nome (Z-A)</option>
                    <option>Último contato</option>
                </select>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contato</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipo</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Interesses</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Último contato</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">Carlos Eduardo</div>
                                    <div class="text-sm text-gray-500">CPF: 123.456.789-00</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <div>carlos@email.com</div>
                            <div>(11) 98765-4321</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Comprador</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">
                            <div class="flex flex-wrap">
                                <span class="tag">Apartamentos</span>
                                <span class="tag">3+ quartos</span>
                                <span class="tag">Zona Sul</span>
                                <span class="tag">Até R$ 800k</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">15/06/2023</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-eye"></i></button>
                            <button class="text-yellow-600 hover:text-yellow-900 mr-3"><i class="fas fa-edit"></i></button>
                            <button class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <!-- More client rows... -->
                </tbody>
            </table>
        </div>
        <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
            <div class="flex-1 flex justify-between sm:hidden">
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Anterior </a>
                <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Próximo </a>
            </div>
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-gray-700">
                        Mostrando <span class="font-medium">1</span> a <span class="font-medium">10</span> de <span class="font-medium">42</span> resultados
                    </p>
                </div>
                <div>
                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Previous</span>
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="#" aria-current="page" class="z-10 bg-blue-50 border-blue-500 text-blue-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 1 </a>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 2 </a>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 3 </a>
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Next</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Reports Tab -->
<div id="reports-tab" class="tab-content">
    <h2 class="text-xl font-semibold text-gray-800 mb-6">Relatórios e Análises</h2>
    
    <!-- Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500">Imóveis Disponíveis</p>
                    <p class="text-2xl font-bold">24</p>
                    <p class="text-sm text-gray-500 mt-1"><span class="text-green-500">+2</span> desde o mês passado</p>
                </div>
                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                    <i class="fas fa-home text-xl"></i>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500">Clientes Ativos</p>
                    <p class="text-2xl font-bold">58</p>
                    <p class="text-sm text-gray-500 mt-1"><span class="text-green-500">+5</span> desde o mês passado</p>
                </div>
                <div class="p-3 rounded-full bg-green-100 text-green-600">
                    <i class="fas fa-users text-xl"></i>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500">Vendas este mês</p>
                    <p class="text-2xl font-bold">7</p>
                    <p class="text-sm text-gray-500 mt-1"><span class="text-green-500">+3</span> desde o mês passado</p>
                </div>
                <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                    <i class="fas fa-handshake text-xl"></i>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500">Locações este mês</p>
                    <p class="text-2xl font-bold">12</p>
                    <p class="text-sm text-gray-500 mt-1"><span class="text-red-500">-2</span> desde o mês passado</p>
                </div>
                <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                    <i class="fas fa-key text-xl"></i>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Charts -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-medium mb-4">Vendas por Mês</h3>
            <div class="h-64 bg-gray-50 rounded-lg p-4 flex items-center justify-center">
                <p class="text-gray-500">Gráfico de vendas por mês</p>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-medium mb-4">Locações por Mês</h3>
            <div class="h-64 bg-gray-50 rounded-lg p-4 flex items-center justify-center">
                <p class="text-gray-500">Gráfico de locações por mês</p>
            </div>
        </div>
    </div>
    
    <!-- Secondary Charts -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-medium mb-4">Tipos de Imóveis</h3>
            <div class="h-64 bg-gray-50 rounded-lg p-4 flex items-center justify-center">
                <p class="text-gray-500">Gráfico de tipos de imóveis</p>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-medium mb-4">Clientes por Tipo</h3>
            <div class="h-64 bg-gray-50 rounded-lg p-4 flex items-center justify-center">
                <p class="text-gray-500">Gráfico de tipos de clientes</p>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-medium mb-4">Bairros Mais Procurados</h3>
            <div class="h-64 bg-gray-50 rounded-lg p-4 flex items-center justify-center">
                <p class="text-gray-500">Gráfico de bairros mais procurados</p>
            </div>
        </div>
    </div>
</div>

<!-- Calendar Tab -->
<div id="calendar-tab" class="tab-content">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-gray-800">Agenda de Visitas e Compromissos</h2>
        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
            <i class="fas fa-plus mr-2"></i> Novo Compromisso
        </button>
    </div>
    
    <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
        <div class="p-4 border-b flex justify-between items-center">
            <div class="flex items-center">
                <button class="p-2 rounded-lg hover:bg-gray-100">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <h3 class="mx-4 text-lg font-medium">Junho 2023</h3>
                <button class="p-2 rounded-lg hover:bg-gray-100">
                    <i class="fas fa-chevron-right"></i>
                </button>
                <button class="ml-4 px-4 py-2 bg-blue-600 text-white rounded-lg">Hoje</button>
            </div>
            <div>
                <select class="border rounded-lg px-3 py-2 text-sm">
                    <option>Visualização Semanal</option>
                    <option>Visualização Mensal</option>
                    <option>Visualização Diária</option>
                </select>
            </div>
        </div>
        <div class="p-4">
            <div class="grid grid-cols-7 gap-1 mb-2">
                <div class="text-center font-medium text-gray-500 py-2">Dom</div>
                <div class="text-center font-medium text-gray-500 py-2">Seg</div>
                <div class="text-center font-medium text-gray-500 py-2">Ter</div>
                <div class="text-center font-medium text-gray-500 py-2">Qua</div>
                <div class="text-center font-medium text-gray-500 py-2">Qui</div>
                <div class="text-center font-medium text-gray-500 py-2">Sex</div>
                <div class="text-center font-medium text-gray-500 py-2">Sáb</div>
            </div>
            <div class="grid grid-cols-7 gap-1">
                <!-- Calendar days with events -->
                <div class="h-24 border rounded-lg p-1 overflow-hidden">
                    <div class="text-right text-sm">28</div>
                </div>
                <div class="h-24 border rounded-lg p-1 overflow-hidden">
                    <div class="text-right text-sm">29</div>
                </div>
                <div class="h-24 border rounded-lg p-1 overflow-hidden">
                    <div class="text-right text-sm">30</div>
                </div>
                <div class="h-24 border rounded-lg p-1 overflow-hidden">
                    <div class="text-right text-sm">31</div>
                </div>
                <div class="h-24 border rounded-lg p-1 overflow-hidden bg-blue-50">
                    <div class="text-right text-sm">1</div>
                    <div class="text-xs mt-1 p-1 bg-blue-100 text-blue-800 rounded truncate">Visita - Casa Jd. Europa</div>
                </div>
                <div class="h-24 border rounded-lg p-1 overflow-hidden">
                    <div class="text-right text-sm">2</div>
                </div>
                <div class="h-24 border rounded-lg p-1 overflow-hidden">
                    <div class="text-right text-sm">3</div>
                </div>
                <!-- More calendar days... -->
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="p-4 border-b">
            <h3 class="text-lg font-medium">Próximos Compromissos</h3>
        </div>
        <div class="divide-y divide-gray-200">
            <div class="p-4 flex items-start hover:bg-gray-50 cursor-pointer">
                <div class="flex-shrink-0 bg-blue-100 p-2 rounded-full text-blue-600">
                    <i class="fas fa-home"></i>
                </div>
                <div class="ml-3 flex-1">
                    <div class="flex items-center justify-between">
                        <h4 class="text-sm font-medium">Visita ao apartamento</h4>
                        <span class="text-xs text-gray-500">10:00 - 11:00</span>
                    </div>
                    <p class="text-sm text-gray-500 mt-1">Av. Paulista, 1000 - apto 123</p>
                    <p class="text-xs text-gray-400 mt-1">Cliente: Carlos Eduardo</p>
                </div>
            </div>
            <div class="p-4 flex items-start hover:bg-gray-50 cursor-pointer">
                <div class="flex-shrink-0 bg-green-100 p-2 rounded-full text-green-600">
                    <i class="fas fa-file-signature"></i>
                </div>
                <div class="ml-3 flex-1">
                    <div class="flex items-center justify-between">
                        <h4 class="text-sm font-medium">Assinatura de contrato</h4>
                        <span class="text-xs text-gray-500">14:00 - 15:00</span>
                    </div>
                    <p class="text-sm text-gray-500 mt-1">Escritório da Imobiliária</p>
                    <p class="text-xs text-gray-400 mt-1">Cliente: Ana Paula</p>
                </div>
            </div>
            <!-- More upcoming events... -->
        </div>
    </div>
</div>

<!-- Property Form Modal -->
<div id="property-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-4xl max-h-screen overflow-y-auto">
        <div class="p-6">
            <div class="flex justify-between items-center border-b pb-4">
                <h3 class="text-xl font-semibold">Cadastro de Imóvel</h3>
                <button onclick="hideModal('property-modal')" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form class="mt-6 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Título do Imóvel*</label>
                        <input type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tipo*</label>
                        <select class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                            <option value="">Selecione...</option>
                            <option>Casa</option>
                            <option>Apartamento</option>
                            <option>Comercial</option>
                            <option>Terreno</option>
                            <option>Rural</option>
                            <option>Outro</option>
                        </select>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Descrição*</label>
                    <textarea rows="3" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required></textarea>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Status*</label>
                        <select class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                            <option value="">Selecione...</option>
                            <option>Disponível</option>
                            <option>Alugado</option>
                            <option>Vendido</option>
                            <option>Em Negociação</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">CEP*</label>
                        <div class="flex">
                            <input type="text" class="w-full px-3 py-2 border rounded-l-lg focus:ring-blue-500 focus:border-blue-500" required>
                            <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-r-lg hover:bg-blue-700">Buscar</button>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Rua*</label>
                        <input type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Número*</label>
                        <input type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Complemento</label>
                        <input type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Bairro*</label>
                        <input type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Cidade*</label>
                        <input type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Estado*</label>
                        <select class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                            <option value="">Selecione...</option>
                            <option>AC</option>
                            <option>AL</option>
                            <option>AP</option>
                            <option>AM</option>
                            <option>BA</option>
                            <option>CE</option>
                            <option>DF</option>
                            <option>ES</option>
                            <option>GO</option>
                            <option>MA</option>
                            <option>MT</option>
                            <option>MS</option>
                            <option>MG</option>
                            <option>PA</option>
                            <option>PB</option>
                            <option>PR</option>
                            <option>PE</option>
                            <option>PI</option>
                            <option>RJ</option>
                            <option>RN</option>
                            <option>RS</option>
                            <option>RO</option>
                            <option>RR</option>
                            <option>SC</option>
                            <option>SP</option>
                            <option>SE</option>
                            <option>TO</option>
                        </select>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Área útil (m²)*</label>
                        <input type="number" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Área total (m²)*</label>
                        <input type="number" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Quartos</label>
                        <input type="number" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Suítes</label>
                        <input type="number" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Banheiros</label>
                        <input type="number" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Vagas</label>
                        <input type="number" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Valor de Venda (R$)</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500">R$</span>
                            </div>
                            <input type="text" class="pl-10 w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Valor de Locação (R$)</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500">R$</span>
                            </div>
                            <input type="text" class="pl-10 w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Fotos do Imóvel*</label>
                    <div class="file-upload border-2 border-dashed rounded-lg p-4 text-center">
                        <div class="flex flex-col items-center justify-center">
                            <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                            <p class="text-sm text-gray-600">Arraste e solte arquivos aqui ou clique para selecionar</p>
                            <p class="text-xs text-gray-500 mt-1">Formatos: JPG, PNG (Máx. 5MB cada)</p>
                        </div>
                        <input type="file" multiple accept="image/*" onchange="previewImages(this)" required>
                    </div>
                    <div id="image-preview-container" class="mt-4 flex flex-wrap gap-2"></div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Documentos do Imóvel</label>
                    <div class="file-upload border-2 border-dashed rounded-lg p-4 text-center">
                        <div class="flex flex-col items-center justify-center">
                            <i class="fas fa-file-upload text-3xl text-gray-400 mb-2"></i>
                            <p class="text-sm text-gray-600">Arraste e solte arquivos aqui ou clique para selecionar</p>
                            <p class="text-xs text-gray-500 mt-1">Formatos: PDF, DOC, XLS (Máx. 10MB cada)</p>
                        </div>
                        <input type="file" multiple accept=".pdf,.doc,.docx,.xls,.xlsx" onchange="previewDocuments(this)">
                    </div>
                    <div id="document-preview-container" class="mt-4 space-y-2"></div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Observações Internas</label>
                    <textarea rows="3" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"></textarea>
                    <p class="text-xs text-gray-500 mt-1">Essas observações são visíveis apenas para a equipe da imobiliária</p>
                </div>
                
                <div class="flex justify-end space-x-4 pt-6 border-t">
                    <button type="button" onclick="hideModal('property-modal')" class="px-4 py-2 border rounded-lg text-gray-700 hover:bg-gray-50">Cancelar</button>
                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Salvar Imóvel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Client Form Modal -->
<div id="client-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-3xl max-h-screen overflow-y-auto">
        <div class="p-6">
            <div class="flex justify-between items-center border-b pb-4">
                <h3 class="text-xl font-semibold">Cadastro de Cliente</h3>
                <button onclick="hideModal('client-modal')" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form class="mt-6 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nome Completo*</label>
                        <input type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tipo de Cliente*</label>
                        <select class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                            <option value="">Selecione...</option>
                            <option>Comprador</option>
                            <option>Locatário</option>
                            <option>Proprietário</option>
                            <option>Investidor</option>
                            <option>Outro</option>
                        </select>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">CPF/CNPJ*</label>
                        <input type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">RG/IE</label>
                        <input type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">E-mail*</label>
                        <input type="email" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Telefone/WhatsApp*</label>
                        <input type="tel" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Endereço Completo</label>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-xs text-gray-500 mb-1">CEP</label>
                            <input type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-xs text-gray-500 mb-1">Rua</label>
                            <input type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-2">
                        <div>
                            <label class="block text-xs text-gray-500 mb-1">Número</label>
                            <input type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-xs text-gray-500 mb-1">Complemento</label>
                            <input type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-xs text-gray-500 mb-1">Bairro</label>
                            <input type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-2">
                        <div>
                            <label class="block text-xs text-gray-500 mb-1">Cidade</label>
                            <input type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-xs text-gray-500 mb-1">Estado</label>
                            <select class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Selecione...</option>
                                <option>AC</option>
                                <option>AL</option>
                                <option>AP</option>
                                <option>AM</option>
                                <option>BA</option>
                                <option>CE</option>
                                <option>DF</option>
                                <option>ES</option>
                                <option>GO</option>
                                <option>MA</option>
                                <option>MT</option>
                                <option>MS</option>
                                <option>MG</option>
                                <option>PA</option>
                                <option>PB</option>
                                <option>PR</option>
                                <option>PE</option>
                                <option>PI</option>
                                <option>RJ</option>
                                <option>RN</option>
                                <option>RS</option>
                                <option>RO</option>
                                <option>RR</option>
                                <option>SC</option>
                                <option>SP</option>
                                <option>SE</option>
                                <option>TO</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Interesses</label>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs text-gray-500 mb-1">Tipo de Imóvel</label>
                            <select class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" multiple>
                                <option>Casa</option>
                                <option>Apartamento</option>
                                <option>Comercial</option>
                                <option>Terreno</option>
                                <option>Rural</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-500 mb-1">Regiões de Interesse</label>
                            <input type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Ex: Centro, Zona Sul, Jardins">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">
                        <div>
                            <label class="block text-xs text-gray-500 mb-1">Quartos (mínimo)</label>
                            <select class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Qualquer</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4+</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-500 mb-1">Valor Máximo (R$)</label>
                            <input type="number" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-xs text-gray-500 mb-1">Área Mínima (m²)</label>
                            <input type="number" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Histórico de Atendimento</label>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex mb-4">
                            <div class="flex-shrink-0 mr-3">
                                <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <h4 class="text-sm font-medium">Maria Silva</h4>
                                    <span class="text-xs text-gray-500">15/06/2023 14:30</span>
                                </div>
                                <p class="text-sm text-gray-600 mt-1">Cliente interessado em apartamentos na região da Paulista, 3 quartos, até R$ 800.000. Agendada visita para quarta-feira.</p>
                            </div>
                        </div>
                        <!-- More history items... -->
                    </div>
                    <div class="mt-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Adicionar Anotação</label>
                        <textarea rows="3" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"></textarea>
                        <button type="button" class="mt-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">Adicionar ao Histórico</button>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Documentos do Cliente</label>
                    <div class="file-upload border-2 border-dashed rounded-lg p-4 text-center">
                        <div class="flex flex-col items-center justify-center">
                            <i class="fas fa-file-upload text-3xl text-gray-400 mb-2"></i>
                            <p class="text-sm text-gray-600">Arraste e solte arquivos aqui ou clique para selecionar</p>
                            <p class="text-xs text-gray-500 mt-1">Formatos: PDF, DOC, XLS (Máx. 10MB cada)</p>
                        </div>
                        <input type="file" multiple accept=".pdf,.doc,.docx,.xls,.xlsx" onchange="previewDocuments(this)">
                    </div>
                    <div id="client-document-preview-container" class="mt-4 space-y-2"></div>
                </div>
                
                <div class="flex justify-end space-x-4 pt-6 border-t">
                    <button type="button" onclick="hideModal('client-modal')" class="px-4 py-2 border rounded-lg text-gray-700 hover:bg-gray-50">Cancelar</button>
                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Salvar Cliente</button>
                </div>
            </form>
        </div>
    </div>
</div>