<?php include_once '../../core/db.php'; ?>
<form id="conteudo" method="POST" action="core/cadastro/clientes/insert.php" class="mt-6 space-y-6" enctype="multipart/form-data">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nome Completo*</label>
            <input type="text" name="nome" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tipo de Cliente*</label>
            <select name="tipo_cliente" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                <option value="">Selecione...</option>
                <option>Comprador</option>
                <option>Locatário</option>
                <option>Outro</option>
            </select>
        </div>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">CPF/CNPJ*</label>
            <input type="text" name="cpf_cnpj" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">RG/IE</label>
            <input type="text" name="rg_ie" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
        </div>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">E-mail*</label>
            <input type="email" name="email" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Telefone/WhatsApp*</label>
            <input type="tel" name="telefone" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Telefone secundário</label>
            <input type="tel" name="telefone_secundario" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
        </div>
    </div>
    
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Endereço Completo</label>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">CEP*</label>
                <div class="flex">
                    <input name="cep" type="text" class="w-full px-3 py-2 border rounded-l-lg focus:ring-blue-500 focus:border-blue-500">
                    <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-r-lg hover:bg-blue-700">Buscar</button>
                </div>
            </div>
            <div class="md:col-span-2">
                <label class="block text-xs text-gray-500 mb-1">Rua</label>
                <input type="text" name="rua" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-2">
            <div>
                <label class="block text-xs text-gray-500 mb-1">Número</label>
                <input type="text" name="numero" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-xs text-gray-500 mb-1">Complemento</label>
                <input type="text" name="complemento" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-xs text-gray-500 mb-1">Bairro</label>
                <input type="text" name="bairro" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-2">
            <div>
                <label class="block text-xs text-gray-500 mb-1">Cidade</label>
                <input type="text" name="cidade" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-xs text-gray-500 mb-1">Estado</label>
                <select name="estado" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
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
                <select name="ineteresse" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" multiple>
                    <option>Casa</option>
                    <option>Apartamento</option>
                    <option>Comercial</option>
                    <option>Terreno</option>
                    <option>Rural</option>
                </select>
            </div>
            <div>
                <label class="block text-xs text-gray-500 mb-1">Regiões de Interesse</label>
                <input type="text" name="regioes_interesse" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Ex: Centro, Zona Sul, Jardins">
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">
            <div>
                <label class="block text-xs text-gray-500 mb-1">Quartos (mínimo)</label>
                <select name="quarto" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Qualquer</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4+</option>
                </select>
            </div>
            <div>
                <label class="block text-xs text-gray-500 mb-1">Valor Máximo (R$)</label>
                <input type="number" name="valor_maximo" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-xs text-gray-500 mb-1">Área Mínima (m²)</label>
                <input type="number" name="area_minima" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
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
