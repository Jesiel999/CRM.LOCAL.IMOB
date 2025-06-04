<?php include_once '../../core/db.php'; ?>
<?php include_once '../../core/consulta/imoveis/quantidadeImoveis.php'; ?>
<?php include_once '../../core/consulta/clientes/quantidadeClientes.php'; ?>

<div id="property-grid-view">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500">Imóveis Disponíveis</p>
                    <p class="text-2xl font-bold"><?php echo $totalImovel?></p>
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
                    <p class="text-2xl font-bold"><?php echo $totalClientes?></p>
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