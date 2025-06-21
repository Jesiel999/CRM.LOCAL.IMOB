<?php include_once '../../core/db.php'; ?>
<?php include_once '../../core/consulta/dashboard/quantidadeImoveis.php'; ?>
<?php include_once '../../core/consulta/dashboard/quantidadeClientes.php'; ?>
<?php 
$query = "SELECT tipo_cliente, COUNT(*) AS total FROM clientes GROUP BY tipo_cliente";
$stmt = $conn->prepare($query);
$stmt->execute();

$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

$tiposEsperados = ['Comprador', 'Locatário', 'Outro'];
$clientesPorTipo = array_fill_keys($tiposEsperados, 0);

foreach ($resultados as $linha) {
    $tipo = $linha['tipo_cliente'];
    $clientesPorTipo[$tipo] = (int) $linha['total'];
}
?>

<div id="property-grid-view">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500">Imóveis Disponíveis</p>
                    <p class="text-2xl font-bold"><?php echo $totalImovel?></p>
                    <?php if ($difImoveis != 0): ?>
                        <p class="text-sm text-gray-500 mt-1">   
                            <span class="<?= $difImoveis > 0 ? 'text-green-500' : 'text-red-500' ?>">
                                <?= $difImoveis > 0 ? '+' . $difImoveis : $difImoveis ?>
                            </span>
                            desde o mês passado
                        </p>
                    <?php endif; ?>
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
                    <?php if ($difClientes != 0): ?>
                        <p class="text-sm text-gray-500 mt-1">
                            <span class="<?= $difClientes > 0 ? 'text-green-500' : 'text-red-500' ?>">
                                <?= $difClientes > 0 ? '+' . $difClientes : $difClientes ?>
                            </span>
                            desde o mês passado
                        </p>
                    <?php endif; ?>
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
            <div class="h-64 bg-gray-50 rounded-lg p-4">
                <canvas id="graficoClientesTipo"></canvas>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('graficoClientesTipo').getContext('2d');
                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: <?= json_encode(array_keys($clientesPorTipo)) ?>,
                        datasets: [{
                            label: 'Clientes por Tipo',
                            data: <?= json_encode(array_values($clientesPorTipo)) ?>,
                            backgroundColor: ['#3b82f6', '#10b981', '#f59e0b'],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'right',
                                labels: {
                                    color: '#4B5563',
                                    font: { size: 12 }
                                }
                            }
                        }
                    }
                });
        });
        </script>
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-medium mb-4">Bairros Mais Procurados</h3>
            <div class="h-64 bg-gray-50 rounded-lg p-4 flex items-center justify-center">
                <p class="text-gray-500">Gráfico de bairros mais procurados</p>
            </div>
        </div>
    </div>
</div>