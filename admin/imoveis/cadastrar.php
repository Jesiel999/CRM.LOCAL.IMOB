<form id="conteudo" method="POST" action="core/cadastro/imoveis/insert.php" class="mt-6 space-y-6" enctype="multipart/form-data">
 
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Título do Imóvel*</label>
            <input name="titulo" type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" >
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tipo*</label>
            <select name="tipo" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" >
                <option value="">Selecione...</option>
                <option value="Venda">Venda</option>
                <option value="Aluguel">Aluguel</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Categoria*</label>
            <select name="categoria" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" >
                <option value="">Selecione...</option>
                <option value="Casa">Casa</option>
                <option value="Apartamento">Apartamento</option>
                <option value="Comercial">Comercial</option>
                <option value="Terreno">Terreno</option>
                <option value="Rural">Rural</option>
                <option value="Outro">Outro</option>
            </select>
        </div>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Descrição*</label>
        <textarea name="descricao" rows="3" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" ></textarea>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Status*</label>
            <select name="status" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                <option value="">Selecione...</option>
                <option value="Disponível">Disponível</option>
                <option value="Alugado">Alugado</option>
                <option value="Vendido">Vendido</option>
                <option value="Em Negociação">Em Negociação</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">CEP*</label>
            <div class="flex">
                <input name="cep" type="text" class="w-full px-3 py-2 border rounded-l-lg focus:ring-blue-500 focus:border-blue-500">
                <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-r-lg hover:bg-blue-700">Buscar</button>
            </div>
        </div>
    </div>


    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Rua*</label>
            <input name="rua" type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Número*</label>
            <input name="numero" type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Complemento</label>
            <input name="complemento" type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Bairro*</label>
            <input name="bairro" type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" >
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Cidade*</label>
            <input name="cidade" type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" >
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Estado*</label>
            <select name="estado" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" >
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

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Área útil (m²)*</label>
            <input name="areautil" type="number" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" >
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Área total (m²)*</label>
            <input name="areatotal" type="number" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" >
        </div>
    </div>


    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Quartos</label>
            <input name="quartos" type="number" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Suítes</label>
            <input name="suites" type="number" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Banheiros</label>
            <input name="banheiro" type="number" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Vagas</label>
            <input name="vaga" type="number" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Valor de Venda (R$)</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="text-gray-500">R$</span>
                </div>
                <input name="valordevenda" type="text" class="pl-10 w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Valor de Locação (R$)</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="text-gray-500">R$</span>
                </div>
                <input name="valordelocacao" type="text" class="pl-10 w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>
        </div>
    </div>


    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Fotos do Imóvel*</label>
        <div 
            class="file-upload hover:bg-white border-2 border-dashed rounded-lg p-4 text-center cursor-pointer"
            onclick="document.getElementById('fotos').click()">
            
            <i class="fas fa-file-upload text-3xl text-gray-400 mb-2"></i>
            <p class="text-sm text-gray-600">Arraste e solte arquivos aqui ou clique para selecionar</p>
            <p class="text-xs text-gray-500 mt-1">Formatos: JPG, PNG (Máx. 5MB cada)</p>
        </div>
        <input 
            id="fotos" 
            name="fotos[]" 
            type="file" 
            multiple 
            accept="image/*" 
            class="hidden">
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Fotos do Imóvel*</label>
        <div 
            class="file-upload hover:bg-white border-2 border-dashed rounded-lg p-4 text-center cursor-pointer"
            onclick="document.getElementById('documentos').click()">
            
            <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
            <p class="text-sm text-gray-600">Arraste e solte arquivos aqui ou clique para selecionar</p>
            <p class="text-xs text-gray-500 mt-1">Formatos: JPG, PNG (Máx. 5MB cada)</p>
        </div>
        <input 
            id="documentos" 
            name="documentos[]" 
            type="file" 
            multiple 
            accept=".pdf,image/*" 
            class="hidden" 
            >
    </div>

    <div class="flex justify-end space-x-4">
        <button type="reset" onclick="sidebar('admin/imoveis/listar.php'); setPageTitle('Imóveis')" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400">Cancelar</button>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Salvar</button>
    </div>
</form>
