<?php include_once '../../core/db.php'; ?>
<?php include_once '../../core/consulta/clientes/compromissoAgenda.php'; ?>

<div class="mx-auto">
    <div class="flex justify-between items-center mb-6">
        <button onclick="carregarPagina('admin/agenda/compromisso.php')" class="flex items-center bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg shadow transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14m7-7H5"/>
            </svg>
            Novo Compromisso
        </button>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
        <div class="p-4 border-b flex justify-between items-center">
            <div class="flex items-center">
                <button onclick="carregarPagina('admin/agenda/index.php?mes=<?= $mesAnterior ?>&ano=<?= $anoAnterior ?>&visao=<?= $visao ?>')">
                    &#8592;
                </button>
                <h3 class="mx-4 text-lg font-medium"><?= $meses[$mesAtual - 1] . " " . $anoAtual ?></h3>
                <button onclick="carregarPagina('admin/agenda/index.php?mes=<?= $mesSeguinte ?>&ano=<?= $anoSeguinte ?>&visao=<?= $visao ?>')">
                    &#8594;
                </button>
            </div>
            <div>
                <select class="border rounded-lg px-3 py-2 text-sm" onchange="carregarPagina(`admin/agenda/index.php?mes=<?= $mesAtual ?>&ano=<?= $anoAtual ?>&visao=${this.value}`)">
                    <option value="mensal" <?= $visao === 'mensal' ? 'selected' : '' ?>>Visualização Mensal</option>
                    <option value="semanal" <?= $visao === 'semanal' ? 'selected' : '' ?>>Visualização Semanal</option>
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
                if ($visao === 'semanal') {
                    for ($i = 0; $i < 7; $i++) {
                        $diaData = date('Y-m-d', strtotime("+$i days", strtotime($filtroDataInicio)));
                        $diaNumero = date('d', strtotime($diaData));
                        echo '<div class="min-h-32 border rounded-lg p-1 bg-white hover:bg-blue-50">';
                        echo '<div class="text-right text-sm font-bold">' . $diaNumero . '</div>';

                        if (isset($agendaPorDia[$diaData])) {
                            foreach ($agendaPorDia[$diaData] as $comp) {
                                echo '<div class="mt-1 text-xs text-blue-700 bg-blue-50 border border-blue-400 rounded-md p-2 mb-1 shadow-sm">';
                                echo '<div class="text-sm font-medium">' .  htmlspecialchars($comp["tipo_visita"]) . '</div>';
                                echo '<div class="hover:underline cursor-pointer" onclick="carregarPagina(\'admin/clientes/editar.php?id=' . urlencode($comp['cliente_id']) . '\')">Cliente: ' . htmlspecialchars($comp["cliente_nome"]) . '</div>';
                                if (!empty($comp["codigo_imovel"])) {
                                    echo '<div class="hover:underline cursor-pointer mt-1" onclick="carregarPagina(\'admin/imoveis/editar.php?id=' . urlencode($comp['imovel_id']) . '\')">Imóvel: ' . htmlspecialchars($comp['codigo_imovel']) . '</div>';
                                }
                                if (!empty($comp["observacao"])) {
                                    echo '<div class="mt-1"><strong>Obs:</strong> ' . htmlspecialchars($comp["observacao"]) . '</div>';
                                }                                
                                echo '<button onclick="carregarPagina(\'admin/agenda/editarCompromisso.php?id=' . urlencode($comp['id']) . '\')" class="text-yellow-600 hover:text-yellow-900 mr-3"><i class="fas fa-edit"></i></button>';
                                echo '</div>';
                            }
                        }

                        echo '</div>';
                    }
                } else {
                    for ($i = 0; $i < $diaSemana; $i++) {
                        echo '<div class="h-24 border rounded-lg p-1 bg-gray-50"></div>';
                    }

                    for ($dia = 1; $dia <= $diasNoMes; $dia++) {
                        $dataCompleta = sprintf('%04d-%02d-%02d', $anoAtual, $mesAtual, $dia);
                        echo '<div class="min-h-32 border rounded-lg p-1 bg-white hover:bg-blue-50">';
                        echo '<div class="text-right text-sm font-bold">' . $dia . '</div>';

                        if (isset($agendaPorDia[$dataCompleta])) {
                            foreach ($agendaPorDia[$dataCompleta] as $comp) {
                                echo '<div class="mt-1 text-xs text-blue-700 bg-blue-50 border border-blue-400 rounded-md p-2 mb-1 shadow-sm">';
                                echo '<div class="text-sm font-medium">'  .  htmlspecialchars($comp["tipo_visita"]) . '</div>';
                                echo '<div class="hover:underline cursor-pointer" onclick="carregarPagina(\'admin/clientes/editar.php?id=' . urlencode($comp['cliente_id']) . '\')">Cliente: ' . htmlspecialchars($comp["cliente_nome"]) . '</div>';
                                if (!empty($comp["codigo_imovel"])) {
                                    echo '<div class="hover:underline cursor-pointer mt-1" onclick="carregarPagina(\'admin/imoveis/editar.php?id=' . urlencode($comp['imovel_id']) . '\')">Imóvel: ' . htmlspecialchars($comp['codigo_imovel']) . '</div>';
                                }
                                if (!empty($comp["observacao"])) {
                                    echo '<div class="mt-1"><strong>Obs:</strong> ' . htmlspecialchars($comp["observacao"]) . '</div>';
                                }
                                echo '<button onclick="carregarPagina(\'admin/agenda/editarCompromisso.php?id=' . $comp['id'] . '\')" class="text-yellow-600 hover:text-yellow-900 mr-3"><i class="fas fa-edit"></i></button>';
                                echo '</div>';
                            }
                        }

                        echo '</div>';
                    }
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
            <div class="p-4 flex items-start hover:bg-gray-50 cursor-pointer border-b">
                <div class="flex-shrink-0 bg-blue-100 p-2 rounded-full text-blue-600">📅</div>
                <div class="ml-3 flex-1">
                    <div class="flex items-center justify-between">
                        <h4 class="text-sm font-medium"><?= htmlspecialchars($c['tipo_visita']) ?></h4>
                        <span class="text-xs text-gray-500"><?= date('d/m/Y', strtotime($c['data_cadastro'])) ?></span>
                    </div>
                    <div class="text-xs text-gray-600 mt-1 hover:underline" onclick="carregarPagina('admin/clientes/editar.php?id=<?= urlencode($c['cliente_id']) ?>')">
                        Cliente: <?= htmlspecialchars($c['cliente_nome']) ?>
                    </div>
                    <?php if (!empty($c["codigo_imovel"])): ?>
                        <div class="text-xs text-gray-600 mt-1 hover:underline" onclick="carregarPagina('admin/imoveis/editar.php?id=<?= urlencode($c['imovel_id']) ?>')">
                            Imóvel: <?= htmlspecialchars($c['codigo_imovel']) ?> | Nome: <?= htmlspecialchars($c['nome_imovel']) ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($c["observacao"])): ?>
                        <div class="text-xs text-gray-600 mt-1">
                            <strong>Observação:</strong> <?= htmlspecialchars($c["observacao"]) ?>
                        </div>
                    <?php endif; ?>
                    <button onclick="carregarPagina('admin/agenda/editarCompromisso.php?id=<?= $c['id'] ?>')" class="mt-2 text-yellow-600 hover:text-yellow-900 mr-3">
                        <i class="fas fa-edit"></i>
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>
