<?php
include_once '../../core/db.php';
include_once '../../core/consulta/imoveis/imoveiseditar.php';
?>

<div id="conteudo" class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">
    <h2 class="text-2xl font-semibold mb-6">Editar Imóvel - <?php echo htmlspecialchars($imovel['titulo']); ?></h2>

    <form action="core/editar/imoveis.php" enctype="multipart/form-data" method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($imovel['id']); ?>">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <div>
                <label class="block mb-1">Título</label>
                <input type="text" name="titulo" value="<?php echo htmlspecialchars($imovel['titulo']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Tipo</label>
                <select name="tipo" class="w-full border rounded p-2">
                    <option value="Venda" <?php if($imovel['tipo']=='venda') echo 'selected'; ?>>Venda</option>
                    <option value="Aluguel" <?php if($imovel['tipo']=='aluguel') echo 'selected'; ?>>Aluguel</option>
                </select>
            </div>
            
            <div>
                <label class="block mb-1">Categoria</label>
                <select name="categoria" class="w-full border rounded p-2">
                    <option value="Casa" <?php if($imovel['categoria']=='casa') echo 'selected'; ?>>Casa</option>
                    <option value="Apartamento" <?php if($imovel['categoria']=='apartamento') echo 'selected'; ?>>Apartamento</option>
                    <option value="Terreno" <?php if($imovel['categoria']=='terreno') echo 'selected'; ?>>Terreno</option>
                    <option value="Sala" <?php if($imovel['categoria']=='sala') echo 'selected'; ?>>Sala</option>
                    <option value="Outro" <?php if($imovel['categoria']=='outro') echo 'selected'; ?>>Outro</option>
                </select>    
            </div>

            <div>
                <label class="block mb-1">Status</label>
                <select name="status" class="w-full border rounded p-2">
                    <option value="Disponivel" <?php if($imovel['status']=='disponivel') echo 'selected'; ?>>Disponivel</option>
                    <option value="Indisponivel" <?php if($imovel['status']=='indisponivel') echo 'selected'; ?>>Indisponivel</option>
                    <option value="Alugado" <?php if($imovel['status']=='alugado') echo 'selected'; ?>>Alugado</option>
                    <option value="Vendido" <?php if($imovel['status']=='vendido') echo 'selected'; ?>>Vendido</option>
                </select>
            </div>

            <div>
                <label class="block mb-1">CEP</label>
                <input type="text" name="cep" value="<?php echo htmlspecialchars($imovel['cep']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Rua</label>
                <input type="text" name="rua" value="<?php echo htmlspecialchars($imovel['rua']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Número</label>
                <input type="text" name="numero" value="<?php echo htmlspecialchars($imovel['numero']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Complemento</label>
                <input type="text" name="complemento" value="<?php echo htmlspecialchars($imovel['complemento']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Bairro</label>
                <input type="text" name="bairro" value="<?php echo htmlspecialchars($imovel['bairro']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Cidade</label>
                <input type="text" name="cidade" value="<?php echo htmlspecialchars($imovel['cidade']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Estado</label>
                <select name="estado" class="w-full border rounded p-2">
                    <option value="AC" <?php if($imovel['estado']=='AC') echo 'selected'; ?>>AC</option>
                    <option value="AL" <?php if($imovel['estado']=='AL') echo 'selected'; ?>>AL</option>
                    <option value="AP" <?php if($imovel['estado']=='AP') echo 'selected'; ?>>AP</option>
                    <option value="AM" <?php if($imovel['estado']=='AM') echo 'selected'; ?>>AM</option>
                    <option value="BA" <?php if($imovel['estado']=='CE') echo 'selected'; ?>>CE</option>
                    <option value="CE" <?php if($imovel['estado']=='CE') echo 'selected'; ?>>CE</option>
                    <option value="DF" <?php if($imovel['estado']=='DF') echo 'selected'; ?>>DF</option>
                    <option value="ES" <?php if($imovel['estado']=='ES') echo 'selected'; ?>>ES</option>
                    <option value="GO" <?php if($imovel['estado']=='GO') echo 'selected'; ?>>GO</option>
                    <option value="MA" <?php if($imovel['estado']=='MA') echo 'selected'; ?>>MA</option>
                    <option value="MT" <?php if($imovel['estado']=='MT') echo 'selected'; ?>>MT</option>
                    <option value="MS" <?php if($imovel['estado']=='MS') echo 'selected'; ?>>MS</option>
                    <option value="MG" <?php if($imovel['estado']=='MG') echo 'selected'; ?>>MG</option>
                    <option value="PA" <?php if($imovel['estado']=='PA') echo 'selected'; ?>>PA</option>
                    <option value="PB" <?php if($imovel['estado']=='PB') echo 'selected'; ?>>PB</option>
                    <option value="PR" <?php if($imovel['estado']=='PR') echo 'selected'; ?>>PR</option>
                    <option value="PE" <?php if($imovel['estado']=='PE') echo 'selected'; ?>>PE</option>
                    <option value="PI" <?php if($imovel['estado']=='PI') echo 'selected'; ?>>PI</option>
                    <option value="RJ" <?php if($imovel['estado']=='RJ') echo 'selected'; ?>>RJ</option>
                    <option value="RN" <?php if($imovel['estado']=='RN') echo 'selected'; ?>>RN</option>
                    <option value="RS" <?php if($imovel['estado']=='RS') echo 'selected'; ?>>RS</option>
                    <option value="RO" <?php if($imovel['estado']=='RO') echo 'selected'; ?>>RO</option>
                    <option value="RR" <?php if($imovel['estado']=='RR') echo 'selected'; ?>>RR</option>
                    <option value="SC" <?php if($imovel['estado']=='SC') echo 'selected'; ?>>SC</option>
                    <option value="SP" <?php if($imovel['estado']=='SP') echo 'selected'; ?>>SP</option>
                    <option value="SE" <?php if($imovel['estado']=='SE') echo 'selected'; ?>>SE</option>
                    <option value="TO" <?php if($imovel['estado']=='TO') echo 'selected'; ?>>TO</option>
                </select>
            </div>

            <div>
                <label class="block mb-1">Área útil (m²)</label>
                <input type="number" step="0.01" name="areautil" value="<?php echo htmlspecialchars($imovel['areautil']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Área total (m²)</label>
                <input type="number" step="0.01" name="areatotal" value="<?php echo htmlspecialchars($imovel['areatotal']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Quartos</label>
                <input type="number" name="quartos" value="<?php echo htmlspecialchars($imovel['quartos']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Suítes</label>
                <input type="number" name="suites" value="<?php echo htmlspecialchars($imovel['suites']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Banheiros</label>
                <input type="number" name="banheiro" value="<?php echo htmlspecialchars($imovel['banheiro']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Vagas</label>
                <input type="number" name="vaga" value="<?php echo htmlspecialchars($imovel['vaga']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Valor de Venda (R$)</label>
                <input type="number" step="0.01" name="valordevenda" value="<?php echo htmlspecialchars($imovel['valordevenda']); ?>" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1">Valor de Locação (R$)</label>
                <input type="number" step="0.01" name="valordelocacao" value="<?php echo htmlspecialchars($imovel['valordelocacao']); ?>" class="w-full border rounded p-2">
            </div>

            <div class="md:col-span-2">
                <label class="block mb-1">Descrição</label>
                <textarea name="descricao" rows="4" class="w-full border rounded p-2"><?php echo htmlspecialchars($imovel['descricao']); ?></textarea>
            </div>
        </div>

        <div class="mt-6 flex justify-end space-x-4">
            <button onclick="sidebar('admin/imoveis/listar.php'); setPageTitle('Imóveis')" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">Cancelar</button>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Salvar Alterações</button>
        </div>
    </form>

</div>
