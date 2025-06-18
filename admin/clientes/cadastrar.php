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
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <label class="block text-xs text-gray-500 mb-1">Tipo de Imóvel</label>
                <select name="imovel_interesse" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" multiple>
                    <option value="">Selecione...</option>
                    <option  value="Casa">Casa</option>
                    <option  value="Apartamento">Apartamento</option>
                    <option  value="Comercial">Comercial</option>
                    <option  value="Terreno">Terreno</option>
                    <option  value="Rural">Rural</option>
                </select>
            </div>
            <div>
                <label class="block text-xs text-gray-500 mb-1">Estado Interesse</label>
                <select name="regioes_interesse" class="w-full border rounded p-2">
                    <option value="">Selecione...</option>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RS">RS</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                    <option value="SE">SE</option>
                    <option value="TO">TO</option>
                </select>
            </div>
            <div>
                <label class="block text-xs text-gray-500 mb-1">Quartos (mínimo)</label>
                <select name="quartos_min_interesse" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Qualquer</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4+</option>
                </select>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">
            <div>
                <label class="block text-xs text-gray-500 mb-1">Valor Máximo (R$)</label>
                <input type="number" name="valor_max_interesse" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-xs text-gray-500 mb-1">Área Mínima (m²)</label>
                <input type="number" name="area_min_interesse" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-xs text-gray-500 mb-1">Urgência</label>
                <select name="urgencia" class="w-full border rounded p-2">
                    <option value="" >Selecione...</option>
                    <option value="Imediata" >Imediata</option>
                    <option value="1 a 3 meses">1 a 3 meses</option>
                    <option value="3 a 6 meses">3 a 6 meses</option>
                    <option value="Mais de 6 meses">Mais de 6 meses</option>
                </select>
            </div>
        </div>
    </div>
    
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Histórico de Atendimento</label>
        <div class="mt-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Adicionar Anotação</label>
            <textarea rows="3" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"></textarea>
            <button type="button" class="mt-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">Adicionar ao Histórico</button>
        </div>
    </div>
    <div class="flex justify-end space-x-4 pt-6 border-t">
        <button type="button" onclick="carregarPagina('admin/clientes/index.php')" class="px-4 py-2 border rounded-lg text-gray-700 hover:bg-gray-50">Cancelar</button>
        <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Salvar Cliente</button>
    </div>
</form>
