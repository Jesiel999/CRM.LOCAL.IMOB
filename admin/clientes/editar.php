<?php
include_once '../../core/db.php';
include_once '../../core/consulta/clientes/clienteseditar.php';
?>

<div id="conteudo" class="mx-auto bg-white p-6 rounded-lg shadow">
    <h2 class="text-2xl text-center rounded-lg bg-gray-500 text-white font-semibold mb-6"><?php echo htmlspecialchars($cliente['nome']); ?></h2>

    <form action="core/editar/clientes/clientes.php" enctype="multipart/form-data" method="POST">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <div class="md:col-span-2 border-b pb-4">
                <h3 class="text-lg font-semibold text-gray-700">Informações Básicas</h3>
            </div>

            <div>
                <label class="block mb-1">Nome</label>
                <input type="text" name="nome" value="<?php echo htmlspecialchars($cliente['nome']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Tipo</label>
                <select name="tipo_cliente" class="w-full border rounded p-2">
                    <option value="Venda" <?php if($cliente['tipo_cliente']=='Comprador') echo 'selected'; ?>>Comprador</option>
                    <option value="Aluguel" <?php if($cliente['tipo_cliente']=='Locatário') echo 'selected'; ?>>Locatário</option>
                    <option value="Venda" <?php if($cliente['tipo_cliente']=='Outros') echo 'selected'; ?>>Outros</option>
                </select>
            </div>
            
            <div>
                <label class="block mb-1">CPF/CNPJ</label>
                <input type="text" name="cpf_cnpj" value="<?php echo $cliente['cpf_cnpj'];?>" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">    
            </div>

            <div>
                <label class="block mb-1">RG/IE</label>
                <input type="text" name="rg_ie" value="<?php echo $cliente['rg_ie'];?>" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"> 
            </div>

            <div>
                <label class="block mb-1">Telefone</label>
                <input type="text" name="cpf_cnpj" value="<?php echo $cliente['telefone'];?>" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">    
            </div>

            <div>
                <label class="block mb-1">Telefone Secundário</label>
                <input type="text" name="rg_ie" value="<?php echo $cliente['telefone_secundario'];?>" class="w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"> 
            </div>

            <div class="md:col-span-2 border-b pb-4">
                <h3 class="text-lg font-semibold text-gray-700">Endereço</h3>
            </div>

            <div>
                <label class="block mb-1">CEP</label>
                <input type="text" name="cep" value="<?php echo htmlspecialchars($cliente['cep']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Rua</label>
                <input type="text" name="rua" value="<?php echo htmlspecialchars($cliente['rua']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Número</label>
                <input type="text" name="numero" value="<?php echo htmlspecialchars($cliente['numero']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Complemento</label>
                <input type="text" name="complemento" value="<?php echo htmlspecialchars($cliente['complemento']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Bairro</label>
                <input type="text" name="bairro" value="<?php echo htmlspecialchars($cliente['bairro']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Cidade</label>
                <input type="text" name="cidade" value="<?php echo htmlspecialchars($cliente['cidade']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Estado</label>
                <select name="estado" class="w-full border rounded p-2">
                    <option value="AC" <?php if($cliente['estado']=='AC') echo 'selected'; ?>>AC</option>
                    <option value="AL" <?php if($cliente['estado']=='AL') echo 'selected'; ?>>AL</option>
                    <option value="AP" <?php if($cliente['estado']=='AP') echo 'selected'; ?>>AP</option>
                    <option value="AM" <?php if($cliente['estado']=='AM') echo 'selected'; ?>>AM</option>
                    <option value="BA" <?php if($cliente['estado']=='CE') echo 'selected'; ?>>CE</option>
                    <option value="CE" <?php if($cliente['estado']=='CE') echo 'selected'; ?>>CE</option>
                    <option value="DF" <?php if($cliente['estado']=='DF') echo 'selected'; ?>>DF</option>
                    <option value="ES" <?php if($cliente['estado']=='ES') echo 'selected'; ?>>ES</option>
                    <option value="GO" <?php if($cliente['estado']=='GO') echo 'selected'; ?>>GO</option>
                    <option value="MA" <?php if($cliente['estado']=='MA') echo 'selected'; ?>>MA</option>
                    <option value="MT" <?php if($cliente['estado']=='MT') echo 'selected'; ?>>MT</option>
                    <option value="MS" <?php if($cliente['estado']=='MS') echo 'selected'; ?>>MS</option>
                    <option value="MG" <?php if($cliente['estado']=='MG') echo 'selected'; ?>>MG</option>
                    <option value="PA" <?php if($cliente['estado']=='PA') echo 'selected'; ?>>PA</option>
                    <option value="PB" <?php if($cliente['estado']=='PB') echo 'selected'; ?>>PB</option>
                    <option value="PR" <?php if($cliente['estado']=='PR') echo 'selected'; ?>>PR</option>
                    <option value="PE" <?php if($cliente['estado']=='PE') echo 'selected'; ?>>PE</option>
                    <option value="PI" <?php if($cliente['estado']=='PI') echo 'selected'; ?>>PI</option>
                    <option value="RJ" <?php if($cliente['estado']=='RJ') echo 'selected'; ?>>RJ</option>
                    <option value="RN" <?php if($cliente['estado']=='RN') echo 'selected'; ?>>RN</option>
                    <option value="RS" <?php if($cliente['estado']=='RS') echo 'selected'; ?>>RS</option>
                    <option value="RO" <?php if($cliente['estado']=='RO') echo 'selected'; ?>>RO</option>
                    <option value="RR" <?php if($cliente['estado']=='RR') echo 'selected'; ?>>RR</option>
                    <option value="SC" <?php if($cliente['estado']=='SC') echo 'selected'; ?>>SC</option>
                    <option value="SP" <?php if($cliente['estado']=='SP') echo 'selected'; ?>>SP</option>
                    <option value="SE" <?php if($cliente['estado']=='SE') echo 'selected'; ?>>SE</option>
                    <option value="TO" <?php if($cliente['estado']=='TO') echo 'selected'; ?>>TO</option>
                </select>
            </div>

            <div class="md:col-span-2 border-b pb-4">
                <h3 class="text-lg font-semibold text-gray-700">Interesses</h3>
            </div>

            <div>
                <label class="block mb-1">Tipo Imovel</label>
                <select name="tipo_imovel" class="w-full border rounded p-2">
                    <option value="Casa" <?php if($cliente['tipo_imovel']=='Casa') echo 'selected'; ?>>Casa</option>
                    <option value="Apartamento" <?php if($cliente['tipo_imovel']=='Apartamento') echo 'selected'; ?>>Apartamento</option>
                    <option value="Comercial" <?php if($cliente['tipo_imovel']=='Comercial') echo 'selected'; ?>>Comercial</option>
                    <option value="Terreno" <?php if($cliente['tipo_imovel']=='Terreno') echo 'selected'; ?>>Terreno</option>
                    <option value="Rural" <?php if($cliente['tipo_imovel']=='Rural') echo 'selected'; ?>>Rural</option>
                    <option value="Outros" <?php if($cliente['tipo_imovel']=='Outros') echo 'selected'; ?>>Outros</option>
                </select>
            </div>
            <div>
                <label class="block mb-1">Número de Quartos</label>
                <input type="text" name="numero_quartos" value="<?php echo htmlspecialchars($cliente['numero_quartos']); ?>" class="w-full border rounded p-2">
            </div>
            <div>
                <label class="block mb-1">Área Mínima(m²)</label>
                <input type="number" name="area_minima" value="<?php echo htmlspecialchars($cliente['area_minima']); ?>" class="w-full border rounded p-2">
            </div>
            <div>
                <label class="block mb-1">Estado Interesse</label>
                <select name="estado_interesse" class="w-full border rounded p-2">
                    <option value="AC" <?php if($cliente['estado_interesse']=='AC') echo 'selected'; ?>>AC</option>
                    <option value="AL" <?php if($cliente['estado_interesse']=='AL') echo 'selected'; ?>>AL</option>
                    <option value="AP" <?php if($cliente['estado_interesse']=='AP') echo 'selected'; ?>>AP</option>
                    <option value="AM" <?php if($cliente['estado_interesse']=='AM') echo 'selected'; ?>>AM</option>
                    <option value="BA" <?php if($cliente['estado_interesse']=='CE') echo 'selected'; ?>>CE</option>
                    <option value="CE" <?php if($cliente['estado_interesse']=='CE') echo 'selected'; ?>>CE</option>
                    <option value="DF" <?php if($cliente['estado_interesse']=='DF') echo 'selected'; ?>>DF</option>
                    <option value="ES" <?php if($cliente['estado_interesse']=='ES') echo 'selected'; ?>>ES</option>
                    <option value="GO" <?php if($cliente['estado_interesse']=='GO') echo 'selected'; ?>>GO</option>
                    <option value="MA" <?php if($cliente['estado_interesse']=='MA') echo 'selected'; ?>>MA</option>
                    <option value="MT" <?php if($cliente['estado_interesse']=='MT') echo 'selected'; ?>>MT</option>
                    <option value="MS" <?php if($cliente['estado_interesse']=='MS') echo 'selected'; ?>>MS</option>
                    <option value="MG" <?php if($cliente['estado_interesse']=='MG') echo 'selected'; ?>>MG</option>
                    <option value="PA" <?php if($cliente['estado_interesse']=='PA') echo 'selected'; ?>>PA</option>
                    <option value="PB" <?php if($cliente['estado_interesse']=='PB') echo 'selected'; ?>>PB</option>
                    <option value="PR" <?php if($cliente['estado_interesse']=='PR') echo 'selected'; ?>>PR</option>
                    <option value="PE" <?php if($cliente['estado_interesse']=='PE') echo 'selected'; ?>>PE</option>
                    <option value="PI" <?php if($cliente['estado_interesse']=='PI') echo 'selected'; ?>>PI</option>
                    <option value="RJ" <?php if($cliente['estado_interesse']=='RJ') echo 'selected'; ?>>RJ</option>
                    <option value="RN" <?php if($cliente['estado_interesse']=='RN') echo 'selected'; ?>>RN</option>
                    <option value="RS" <?php if($cliente['estado_interesse']=='RS') echo 'selected'; ?>>RS</option>
                    <option value="RO" <?php if($cliente['estado_interesse']=='RO') echo 'selected'; ?>>RO</option>
                    <option value="RR" <?php if($cliente['estado_interesse']=='RR') echo 'selected'; ?>>RR</option>
                    <option value="SC" <?php if($cliente['estado_interesse']=='SC') echo 'selected'; ?>>SC</option>
                    <option value="SP" <?php if($cliente['estado_interesse']=='SP') echo 'selected'; ?>>SP</option>
                    <option value="SE" <?php if($cliente['estado_interesse']=='SE') echo 'selected'; ?>>SE</option>
                    <option value="TO" <?php if($cliente['estado_interesse']=='TO') echo 'selected'; ?>>TO</option>
                </select>
            </div>
            <div>
                <label class="block mb-1">Preço Mínimo</label>
                <input type="number" name="preco_minimo" value="<?php echo htmlspecialchars($cliente['preco_minimo']); ?>" class="w-full border rounded p-2">
            </div>
            <div>
                <label class="block mb-1">Preço Máximo</label>
                <input type="number" name="preco_maximo" value="<?php echo htmlspecialchars($cliente['preco_maximo']); ?>" class="w-full border rounded p-2">
            </div>
            <div>
                <label class="block mb-1">Urgência</label>
                <select name="urgencia" class="w-full border rounded p-2">
                    <option value="Imediata" <?php if($cliente['urgencia']=='Imediata') echo 'selected'; ?>>Imediata</option>
                    <option value="1 a 3 meses" <?php if($cliente['urgencia']=='1 a 3 meses') echo 'selected'; ?>>1 a 3 meses</option>
                    <option value="3 a 6 meses" <?php if($cliente['urgencia']=='3 a 6 meses') echo 'selected'; ?>>3 a 6 meses</option>
                    <option value="Mais de 6 meses" <?php if($cliente['urgencia']=='Mais de 6 meses') echo 'selected'; ?>>Mais de 6 meses</option>
                </select>
            </div>

            <div class="md:col-span-2">
                <label class="block text-gray-700 font-medium mb-2">Características Desejadas</label>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3 w-full">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="caracteristicas[]" value="varanda" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-gray-700">Varanda</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="caracteristicas[]" value="suite" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-gray-700">Suíte</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="caracteristicas[]" value="piscina" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-gray-700">Piscina</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="caracteristicas[]" value="pet_friendly" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-gray-700">Pet Friendly</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="caracteristicas[]" value="mobiliado" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-gray-700">Mobiliado</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="caracteristicas[]" value="academia" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-gray-700">Academia</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="caracteristicas[]" value="elevador" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-gray-700">Elevador</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="caracteristicas[]" value="portaria_24h" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-gray-700">Portaria 24h</span>
                    </label>
                </div>
            </div>

            <div class="md:col-span-2 border-b pb-4">
                <h3 class="text-lg font-semibold text-gray-700">Informações Adicionais</h3>
            </div>

            <div class="md:col-span-2">
                <label class="block mb-1">Observações</label>
                <textarea name="observacoes" rows="4" class="w-full border rounded p-2" value="<?php echo $cliente['observacoes']; ?>"></textarea>
            </div>

        <div class="mt-6 flex justify-end space-x-4">
            <button onclick="sidebar('admin/clientes/listar.php'); setPageTitle('Clientes')" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">Cancelar</button>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Salvar Alterações</button>
        </div>
    </form>
</div>
