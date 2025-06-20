<?php 
include_once '../../core/db.php' ; 
include_once '../../core/consulta/agenda/compromisso.php' ;
?>
<form id="conteudo" method="POST" action="core/cadastro/clientes/contato.php" class="mt-6 space-y-6" enctype="multipart/form-data">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tipo de Contato</label>
            <select onclick="toggleImovel()" name="tipoContato" id="contato" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                <option value="">Selecione...</option>
                <option value="ligacao">Ligação</option>
                <option value="email">E-mail</option>
                <option value="whatsapp">WhatsApp</option>
                <option value="visita">Visita</option>
                <option value="outro">Outro</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Cliente</label>
            <select name="idCliente" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                <option value="">Selecione...</option>
                <?php foreach ($clientes as $cliente): ?>
                    <option value="<?= $cliente['idCliente'] ?>">
                        <?= htmlspecialchars($cliente['nomeCliente']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Data Cadastro</label>
            <input type="date" name="data_cadastro" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="imoveisDiv" style="display: none;">
            <label class="block text-sm font-medium text-gray-700 mb-1">Imóveis</label>
            <select name="idImovel" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                <option value="">Selecione...</option>
               <?php foreach ($imoveis as $imovelData): 
                $imovel = $imovelData['dados'];
                ?>
                    <option value="<?= $imovel['id'] ?>">
                        <?= $imovel['codigo'] . " | " .$imovel['titulo'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="mt-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Observação</label>
        <textarea rows="3" name="observacao" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" name="observacao"></textarea>
    </div>

    <div class="flex justify-end space-x-4 pt-6 border-t">
        <button type="button" onclick="carregarPagina('admin/clientes/index.php')" class="px-4 py-2 border rounded-lg text-gray-700 hover:bg-gray-50">Cancelar</button>
        <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Registrar Contato</button>
    </div>
</form>
