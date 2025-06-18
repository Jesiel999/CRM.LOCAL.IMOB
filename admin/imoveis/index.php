<?php include_once '../../core/db.php'; ?>
<?php include_once '../../core/consulta/imoveis/imoveis.php'; ?>
<?php include_once '../../core/consulta/imoveis/quantidadeImoveis.php';?>
<button onclick="carregarPagina('admin/imoveis/cadastrar.php')" class="flex items-center bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg shadow transition mb-5">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14m7-7H5"/>
    </svg>
    Novo Imóvel
</button>

<div id="property-grid-view" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php foreach ($imoveis as $imovelData): 
        $imovel = $imovelData['dados'];
        $fotos = $imovelData['fotos'];
    ?>
    <div class="property-card bg-white rounded-lg shadow overflow-hidden transition duration-300 ease-in-out">
        <div class="relative">
            <div id="carousel-<?php echo $imovel['codigo']; ?>" class="flex overflow-x-auto scroll-smooth no-scrollbar">
                <?php if (!empty($fotos)): ?>
                    <?php foreach ($fotos as $index => $foto): ?>
                        <img src="../../storage/imoveis/imagens/<?php echo $imovel['codigo'] . '/' . $foto; ?>" 
                            alt="Imagem do Imóvel" 
                            class="imagens w-full h-48 object-cover flex-shrink-0 snap-start">
                    <?php endforeach; ?>
                <?php else: ?>
                    <img src="https://via.placeholder.com/800x600?text=Sem+Imagem" 
                        alt="Imagem do Imóvel" 
                        class="imagens w-full h-48 object-cover flex-shrink-0 snap-start">
                <?php endif; ?>
            </div>

            <div class="absolute top-2 right-2">
                <span class="status-badge bg-green-100 text-green-800">
                    <?php echo htmlspecialchars($imovel['tipo']); ?>
                </span>
            </div>

            <div class="absolute bottom-2 left-2">
                <span class="status-badge bg-blue-100 text-blue-800">
                    <?php if( $imovel['valordevenda'] != '0') { echo 'Venda: R$ ' . number_format($imovel['valordevenda'], 2, ',', '.');
                    } else{
                echo 'Aluguel: R$ ' . number_format($imovel['valordelocacao'], 2, ',', '.');
                } ?>
                </span>
            </div>

            <div class="absolute bottom-2 right-2 flex gap-2">
                <?php 
                $total = !empty($fotos) ? count($fotos) : 1;
                for ($i = 0; $i < $total; $i++): 
                ?>
                    <button onclick="goToSlide('<?php echo $imovel['codigo']; ?>', <?php echo $i; ?>)"
                            class="w-3 h-3 rounded-full bg-white border border-gray-400 hover:bg-blue-500 transition"></button>
                <?php endfor; ?>
            </div>
        </div>
        <div class="p-4">
            <div class="flex justify-between items-start">
                <h3 class="text-lg font-semibold"><?php echo htmlspecialchars($imovel['titulo']); ?></h3>
                <span class="text-sm text-gray-500"><?php echo htmlspecialchars($imovel['codigo']); ?></span>
            </div>
            <p class="text-gray-600 text-sm mt-1">
                <?php echo htmlspecialchars($imovel['bairro'] . " , " . $imovel['cidade'] . " - " . $imovel['estado']); ?>
            </p>
            
            <div class="mt-3 flex flex-wrap">
                <span class="text-sm text-gray-500 mr-3">
                    <i class="fas fa-bed mr-1"></i> <?php echo htmlspecialchars($imovel['quartos']); ?> quartos
                </span>
                <span class="text-sm text-gray-500 mr-3">
                    <i class="fas fa-bath mr-1"></i> <?php echo htmlspecialchars($imovel['banheiro']); ?> banheiros
                </span>
                <span class="text-sm text-gray-500">
                    <i class="fas fa-car mr-1"></i> <?php echo htmlspecialchars($imovel['vaga']); ?> vagas
                </span>
            </div>
            
            <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                <div>
                    <span class="text-xs text-gray-500">Área útil:</span>
                    <span class="text-sm font-medium"><?php echo htmlspecialchars($imovel['areautil']); ?> m²</span>
                </div>
                <div class="flex space-x-2">
                    <button onclick="carregarPagina('public/imoveis/exibir.php?id=<?php echo $imovel['id']; ?>')" class="p-2 text-blue-600 hover:text-blue-800">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button onclick="carregarPagina('admin/imoveis/editar.php?id=<?php echo $imovel['id']; ?>')" class="p-2 text-yellow-600 hover:text-yellow-800">
                        <i class="fas fa-edit"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
