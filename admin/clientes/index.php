<?php include_once '../../core/db.php'; ?>
<?php include_once '../../core/consulta/clientes/select.php'?>
<?php include_once '../../core/consulta/clientes/quantidadeClientes.php'?>

<div class="w-full h-full bg-white rounded-lg shadow overflow-hidden">
    <div class="p-4 border-b flex justify-between items-center">
        <div class="flex space-x-4">
            <button onclick="sidebar('admin/clientes/cadastrar.php')" class="flex items-center bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg shadow transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14m7-7H5"/>
                </svg>
                Novo Cliente
            </button>
            <button class="px-4 py-2 hover:bg-blue-100 hover:text-blue-700 rounded-lg">Todos</button>
            <button class="px-4 py-2 hover:bg-blue-100 hover:text-blue-700 rounded-lg">Compradores</button>
            <button class="px-4 py-2 hover:bg-blue-100 hover:text-blue-700 rounded-lg">Locatários</button>
            <button class="px-4 py-2 hover:bg-blue-100 hover:text-blue-700 rounded-lg">Proprietários</button>
            <button class="px-4 py-2 hover:bg-blue-100 hover:text-blue-700 rounded-lg">Investidores</button>
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
            <?php foreach ($clientes as $cliente): ?>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900"><?php echo $cliente['nome']?></div>
                                <div class="text-sm text-gray-500">CPF: <?php echo $cliente['cpf_cnpj']?></div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <div><?php echo $cliente['email']?></div>
                        <div><?php echo $cliente['telefone']?></div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800"><?php echo $cliente['tipo_cliente']?></span>
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
                        <button onclick="sidebar('admin/clientes/exibir.php?id=<?php echo $cliente['id']; ?>')" class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-eye"></i></button>
                        <button onclick="sidebar('admin/clientes/editar.php?id=<?php echo $cliente['id']; ?>')" class="text-yellow-600 hover:text-yellow-900 mr-3"><i class="fas fa-edit"></i></button>
                    </td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
        <div class="flex-1 flex justify-between sm:hidden">
            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Anterior </a>
            <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Próximo </a>
        </div>
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <?php
                $paginaAtual = $totalClientes ?? 1;
                $porPagina = 25;
                $inicio = ($paginaAtual - 1) * $porPagina + 1;
                $fim = min($paginaAtual * $porPagina, $totalClientes);

                if ($totalClientes == 0) {
                    $mensagem = "Nenhum resultado encontrado.";
                } else {
                    $mensagem = "Mostrando $inicio a $porPagina de $totalClientes resultados";
                }
                ?>
                <p class="text-sm text-gray-700"><?php echo $mensagem; ?></p>
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


