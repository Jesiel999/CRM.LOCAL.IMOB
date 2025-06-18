<?php include_once '../../core/db.php'; ?>

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

$sql = "
SELECT 
    c.nome AS cliente_nome,
    cp.data_cadastro,
    cp.observacao
FROM contato cp
JOIN clientes c ON c.id = cp.cliente_id
WHERE MONTH(cp.data_cadastro) = :mes AND YEAR(cp.data_cadastro) = :ano
ORDER BY cp.data_cadastro
";


$stmt = $conn->prepare($sql);
$stmt->execute([':mes' => $mesAtual, ':ano' => $anoAtual]);
$compromissos = $stmt->fetchAll(PDO::FETCH_ASSOC);

$agendaPorDia = [];
foreach ($compromissos as $c) {
    $data = date('Y-m-d', strtotime($c['data_cadastro']));
    $agendaPorDia[$data][] = $c;
}
?>

<div class="mx-auto">
    <div class="flex justify-between items-center mb-6">
        <button onclick="carregarPagina('admin/compromisso/cadastrar.php')" class="flex items-center bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg shadow transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14m7-7H5"/>
            </svg>
            Novo Compromisso
        </button>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
        <div class="p-4 border-b flex justify-between items-center">
            <div class="flex items-center">
                <button onclick="carregarPagina('admin/agenda/index.php?mes=<?= $mesAtual - 1 ?>&ano=<?= $anoAtual ?>')" class="p-2 rounded-lg hover:bg-gray-100">
                    &#8592;
                </button>

                <h3 class="mx-4 text-lg font-medium"><?= $meses[$mesAtual - 1] . " " . $anoAtual ?></h3>

                <button onclick="carregarPagina('admin/agenda/index.php?mes=<?= $mesAtual + 1 ?>&ano=<?= $anoAtual ?>')" class="p-2 rounded-lg hover:bg-gray-100">
                    &#8594;
                </button>
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
                    $dataCompleta = sprintf('%04d-%02d-%02d', $anoAtual, $mesAtual, $dia);

                    echo '<div class="h-24 border rounded-lg p-1 overflow-hidden bg-white hover:bg-blue-50">';
                    echo '<div class="text-right text-sm font-bold">' . $dia . '</div>';

                    if (isset($agendaPorDia[$dataCompleta])) {
                        foreach ($agendaPorDia[$dataCompleta] as $comp) {
                            echo '<div class="mt-1 text-xs text-blue-600 truncate">';
                            echo '<strong>' . htmlspecialchars($comp["observacao"]) . '</strong><br>';
                            echo date('H:i', strtotime($comp["data_cadastro"])) . '<br>';
                            echo 'Cliente: ' . htmlspecialchars($comp["cliente_nome"]);
                            echo '</div>';
                        }
                    }

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
            <?php foreach ($compromissos as $c): ?>
                <div class="p-4 flex items-start hover:bg-gray-50 cursor-pointer">
                    <div class="flex-shrink-0 bg-blue-100 p-2 rounded-full text-blue-600">
                        📅
                    </div>
                    <div class="ml-3 flex-1">
                        <div class="flex items-center justify-between">
                            <h4 class="text-sm font-medium"><?= htmlspecialchars($c['observacao']) ?></h4>
                            <span class="text-xs text-gray-500"><?= date('d/m/Y H:i', strtotime($c['data_cadastro'])) ?></span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1"><?= htmlspecialchars($c['local']) ?></p>
                        <p class="text-xs text-gray-400 mt-1">Cliente: <?= htmlspecialchars($c['cliente_nome']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
