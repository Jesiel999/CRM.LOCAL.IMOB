<?php
$mesAtual = isset($_GET['mes']) ? intval($_GET['mes']) : date('n');
$anoAtual = isset($_GET['ano']) ? intval($_GET['ano']) : date('Y');
$visao = isset($_GET['visao']) ? $_GET['visao'] : 'mensal';

if ($mesAtual < 1) {
    $mesAtual = 12;
    $anoAtual--;
} elseif ($mesAtual > 12) {
    $mesAtual = 1;
    $anoAtual++;
}

$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
$primeiroDia = mktime(0, 0, 0, $mesAtual, 1, $anoAtual);
$diasNoMes = date("t", $primeiroDia);
$diaSemana = date("w", $primeiroDia);

if ($visao === 'semanal') {
    $hoje = date('Y-m-d');
    $inicioSemana = date('Y-m-d', strtotime('last Sunday', strtotime($hoje)));
    $fimSemana = date('Y-m-d', strtotime($inicioSemana . ' +6 days'));
    $filtroDataInicio = $inicioSemana;
    $filtroDataFim = $fimSemana;
} else {
    $filtroDataInicio = sprintf('%04d-%02d-01', $anoAtual, $mesAtual);
    $filtroDataFim = date('Y-m-t', strtotime($filtroDataInicio));
}

$sql = "
SELECT 
    c.id AS id,
    c.nome AS cliente_nome,
    IM.id AS imovel_id,
    IM.codigo AS codigo_imovel,
    IM.titulo AS nome_imovel,
    c.id AS cliente_id,
    cp.data_cadastro,
    cp.tipo AS tipo_visita,
    cp.observacao
FROM contato cp
JOIN clientes c ON c.id = cp.cliente_id
JOIN imoveis IM ON cp.imovel_id = IM.id
WHERE cp.data_cadastro BETWEEN :inicio AND :fim
ORDER BY cp.data_cadastro
";
$stmt = $conn->prepare($sql);
$stmt->execute([':inicio' => $filtroDataInicio, ':fim' => $filtroDataFim]);
$compromissos = $stmt->fetchAll(PDO::FETCH_ASSOC);

$agendaPorDia = [];
foreach ($compromissos as $c) {
    $data = date('Y-m-d', strtotime($c['data_cadastro']));
    $agendaPorDia[$data][] = $c;
}


$mesAnterior = $mesAtual - 1;
$anoAnterior = $anoAtual;
if ($mesAnterior < 1) {
    $mesAnterior = 12;
    $anoAnterior--;
}
$mesSeguinte = $mesAtual + 1;
$anoSeguinte = $anoAtual;
if ($mesSeguinte > 12) {
    $mesSeguinte = 1;
    $anoSeguinte++;
}
?>