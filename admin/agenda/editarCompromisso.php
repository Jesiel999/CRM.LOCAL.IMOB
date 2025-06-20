<?php 
include_once '../../core/db.php';
include_once '../../core/editar/agenda/consulta.php';
include_once '../../core/consulta/clientes/select.php';
include_once '../../core/consulta/imoveis/imoveis.php';
?>

<form id="conteudo" method="POST" action="core/cadastro/clientes/update_contato.php" class="mt-6 space-y-6" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= htmlspecialchars($cliente['id']) ?>">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tipo de Contato</label>
            <select onclick="toggleImovel()" name="tipoContato" id="contato" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                <option value="">Selecione...</option>
                <option value="ligacao" <?= $cliente['tipo'] == 'ligacao' ? 'selected' : '' ?>>Ligação</option>
                <option value="email" <?= $cliente['tipo'] == 'email' ? 'selected' : '' ?>>E-mail</option>
                <option value="whatsapp" <?= $cliente['tipo'] == 'whatsapp' ? 'selected' : '' ?>>WhatsApp</option>
                <option value="visita" <?= $cliente['tipo'] == 'visita' ? 'selected' : '' ?>>Visita</option>
                <option value="outro" <?= $cliente['tipo'] == 'outro' ? 'selected' : '' ?>>Outro</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Cliente</label>
            <select name="idCliente" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                <option value="">Selecione...</option>
                <?php foreach ($clientes as $cli): ?>
                    <option value="<?= htmlspecialchars($cli['id']) ?>" <?= $cli['id'] == $cliente['cliente_id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($cli['nome']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Data Cadastro</label>
            <input type="date" name="data_cadastro" value="<?= htmlspecialchars($cliente['data_cadastro']) ?>" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="imoveisDiv" style="<?= $cliente['tipo'] === 'visita' ? '' : 'display: none;' ?>">
            <label class="block text-sm font-medium text-gray-700 mb-1">Imóveis</label>
            <select name="idImovel" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                <option value="">Selecione...</option>
                <?php foreach ($imoveis as $imovelData): 
                    $imovel = $imovelData['dados']; ?>
                    <option value="<?= $imovel['id'] ?>" <?= $imovel['id'] == $cliente['imovel_id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($imovel['codigo'] . " | " . $imovel['titulo']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="mt-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Observação</label>
        <textarea rows="3" name="observacao" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"><?= htmlspecialchars($cliente['observacao']) ?></textarea>
    </div>

    <div class="flex justify-end space-x-4 pt-6 border-t">
        <button type="button" onclick="carregarPagina('admin/clientes/index.php')" class="px-4 py-2 border rounded-lg text-gray-700 hover:bg-gray-50">Cancelar</button>
        <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Atualizar Contato</button>
    </div>
</form>
