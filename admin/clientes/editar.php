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
                <h3 class="text-lg font-semibold text-gray-700">Informações Adicionais</h3>
            </div>

            <div class="md:col-span-2">
                <label class="block mb-1">Observações</label>
                <textarea name="observacoes" rows="4" class="w-full border rounded p-2" value="<?php echo $cliente['observacoes']; ?>"></textarea>
            </div>
        </div>

        <div class="mt-6 flex justify-end space-x-4">
            <button onclick="sidebar('admin/clientes/listar.php'); setPageTitle('Clientes')" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">Cancelar</button>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Salvar Alterações</button>
        </div>
    </form>
</div>
