<?php
$mesAtual = isset($_GET['mes']) ? intval($_GET['mes']) : date('n');
$anoAtual = isset($_GET['ano']) ? intval($_GET['ano']) : date('Y');

if ($mesAtual < 1) {
    $mesAtual = 12;
    $anoAtual--;
} elseif ($mesAtual > 12) {
    $mesAtual = 1;
    $anoAtual++;
}

$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

$primeiroDia = mktime(0, 0, 0, $mesAtual, 1, $anoAtual);
$diaSemana = date("w", $primeiroDia);
$diasNoMes = date("t", $primeiroDia); 
?>
<div class="mx-auto">
    <div class="flex justify-between items-center mb-6">
        <button onclick="sidebar('admin/compromisso/cadastrar.php')" class="flex items-center bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg shadow transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14m7-7H5"/>
            </svg>
            Novo Compromisso
        </button>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
        <div class="p-4 border-b flex justify-between items-center">
            <div class="flex items-center">
                <a href="?mes=<?= $mesAtual - 1 ?>&ano=<?= $anoAtual ?>" class="p-2 rounded-lg hover:bg-gray-100">
                    &#8592;
                </a>
                <h3 class="mx-4 text-lg font-medium"><?= $meses[$mesAtual - 1] . " " . $anoAtual ?></h3>
                <a href="?mes=<?= $mesAtual + 1 ?>&ano=<?= $anoAtual ?>" class="p-2 rounded-lg hover:bg-gray-100">
                    &#8594;
                </a>
            </div>
            <div>
                <select class="border rounded-lg px-3 py-2 text-sm">
                    <option selected>Visualização Mensal</option>
                    <option>Visualização Semanal</option>
                    <option>Visualização Diária</option>
                </select>
            </div>
        </div>

        <div class="p-4">
            <div class="grid grid-cols-7 gap-1 mb-2">
                <?php foreach (["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"] as $dia): ?>
                    <div class="text-center font-medium text-gray-500 py-2"><?= $dia ?></div>
                <?php endforeach; ?>
            </div>
            <div class="grid grid-cols-7 gap-1">
                <?php
                for ($i = 0; $i < $diaSemana; $i++) {
                    echo '<div class="h-24 border rounded-lg p-1 bg-gray-50"></div>';
                }

                for ($dia = 1; $dia <= $diasNoMes; $dia++) {
                    echo '<div class="h-24 border rounded-lg p-1 overflow-hidden bg-white hover:bg-blue-50">';
                    echo '<div class="text-right text-sm">' . $dia . '</div>';
                    echo '</div>';
                }
                ?>
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
                    🏠
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
                    📝
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
        </div>
    </div>
</div>

