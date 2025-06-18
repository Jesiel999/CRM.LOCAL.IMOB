<?php
include_once '../../core/db.php';
include_once '../../core/consulta/imoveis/imoveisexibir.php';
?>
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
    <div>
        <h1 class="text-3xl font-bold text-gray-800"><?php echo strtoupper(htmlspecialchars($imovel['categoria'])) . ' - ' . htmlspecialchars($imovel['titulo'])?></h1>
        <div class="flex items-center mt-2">
            <i class="fas fa-map-marker-alt text-gray-400 mr-2"></i>
            <span class="text-gray-600"><?php echo htmlspecialchars($imovel['rua']) . ', ' . htmlspecialchars($imovel['numero']) . ' - ' . htmlspecialchars($imovel['bairro']) . ', ' . htmlspecialchars($imovel['cidade']) . ' - ' . htmlspecialchars($imovel['estado'])?></span>
        </div>
    </div>
    <div class="mt-4 md:mt-0">
        <span class="text-2xl font-bold text-blue-500"><?php if ($imovel['valordevenda'] != '0'){
                echo 'R$' . number_format($imovel['valordevenda'], 2, ',', '.');
            } else {
                echo 'R$' . number_format($imovel['valordelocacao'], 2, ',', '.');
            }
                ?></span>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-4 gap-4 mb-8">

    <div class="lg:col-span-3 rounded-lg overflow-hidden">
        <img id="main-image" src="<?php echo "../../storage/imoveis/imagens/" . $imovel['codigo'] . "/" . $imovel['nome_arquivo']?>" 
                alt="Casa moderna" class="w-full h-96 object-cover property-image rounded-lg">
    </div>
    <?php foreach ($imoveis as $id => $dados): ?>
    <?php 
        $fotos = $dados['fotos'];
    ?>
    
    <div class="grid grid-cols-2 lg:grid-cols-1 gap-2">
        <?php if (!empty($fotos) && count($fotos) > 1): ?>
            <?php foreach (array_slice($fotos, 1) as $foto): ?> 
                <img
                    src="../../storage/imoveis/imagens/<?php echo $imovel['codigo'] . '/' . $foto; ?>"
                    alt="Imagem do Imóvel" 
                    class="h-28 w-full object-cover rounded-lg thumbnail active">
            <?php endforeach; ?>
        <?php else: ?>
            <img src="https://via.placeholder.com/800x600?text=Sem+Imagem" 
                alt="Imagem do Imóvel" 
                class="imagens w-full h-48 object-cover flex-shrink-0 snap-start">
        <?php endif; ?>
    </div>
<?php endforeach; ?>

</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">

    <div class="lg:col-span-2">

        <div class="flex border-b mb-6">
            <button class="tab-button px-4 py-2 mr-2 active" onclick="changeTab('description')">Descrição</button>
            <button class="tab-button px-4 py-2 mr-2" onclick="changeTab('features')">Características</button>
            <button class="tab-button px-4 py-2" onclick="changeTab('contact')">Contato</button>
        </div>

        <div id="description" class="tab-content">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Sobre este imóvel</h2>
            <p class="text-gray-600 mb-4">
                Excelente casa moderna localizada no coração do Jardins, um dos bairros mais nobres de São Paulo. 
                A propriedade foi completamente reformada em 2020, com materiais de primeira qualidade e design contemporâneo.
            </p>
            <p class="text-gray-600 mb-4">
                A casa possui ampla área de lazer com piscina aquecida, jardim paisagístico e churrasqueira gourmet. 
                Os ambientes internos são integrados e iluminados, com pé-direito alto e grandes janelas que garantem 
                ventilação e iluminação natural.
            </p>
            <p class="text-gray-600">
                Localização privilegiada, a poucos metros da Avenida Paulista, com fácil acesso a restaurantes, 
                cafés, teatros e todo o comércio sofisticado da região.
            </p>
        </div>

        <div id="features" class="tab-content hidden">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Detalhes do imóvel</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <h3 class="font-bold text-gray-700 mb-2">Informações básicas</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex justify-between">
                            <span>Área útil</span>
                            <span class="font-medium"><?php echo $imovel['areautil'] ?> m²</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Área total</span>
                            <span class="font-medium"><?php echo $imovel['areatotal'] ?> m²</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Quartos</span>
                            <span class="font-medium"><?php echo $imovel['quartos'] ?></span>
                        </li>
                        <li class="flex justify-between">
                            <span>Banheiros</span>
                            <span class="font-medium"><?php echo $imovel['banheiro'] ?></span>
                        </li>
                        <li class="flex justify-between">
                            <span>Vagas</span>
                            <span class="font-medium"><?php echo $imovel['vaga'] ?></span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-gray-700 mb-2">Comodidades</h3>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex items-center">
                            <div class="amenity-icon mr-2">
                                <i class="fas fa-swimming-pool"></i>
                            </div>
                            <span class="text-gray-600">Piscina</span>
                        </div>
                        <div class="flex items-center">
                            <div class="amenity-icon mr-2">
                                <i class="fas fa-warehouse"></i>
                            </div>
                            <span class="text-gray-600">Garagem</span>
                        </div>
                        <div class="flex items-center">
                            <div class="amenity-icon mr-2">
                                <i class="fas fa-fire"></i>
                            </div>
                            <span class="text-gray-600">Churrasqueira</span>
                        </div>
                        <div class="flex items-center">
                            <div class="amenity-icon mr-2">
                                <i class="fas fa-wifi"></i>
                            </div>
                            <span class="text-gray-600">Wi-Fi</span>
                        </div>
                        <div class="flex items-center">
                            <div class="amenity-icon mr-2">
                                <i class="fas fa-tshirt"></i>
                            </div>
                            <span class="text-gray-600">Lavanderia</span>
                        </div>
                        <div class="flex items-center">
                            <div class="amenity-icon mr-2">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <span class="text-gray-600">Cozinha equipada</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="contact" class="tab-content hidden">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Entre em contato</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="font-bold text-gray-700 mb-2">Corretor responsável</h3>
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" 
                                alt="Corretora" class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <p class="font-bold text-gray-800">Mariana Silva</p>
                            <p class="text-gray-600">CRECI-SP 123.456</p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <i class="fas fa-phone-alt text-blue-500 mr-3 w-5"></i>
                            <span class="text-gray-600">(11) 98765-4321</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-envelope text-blue-500 mr-3 w-5"></i>
                            <span class="text-gray-600">mariana@casanova.com.br</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-clock text-blue-500 mr-3 w-5"></i>
                            <span class="text-gray-600">Disponível das 9h às 18h</span>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="font-bold text-gray-700 mb-2">Agende uma visita</h3>
                    <form action="../../services/email/envioContato.php" method="POST" class="space-y-3" >
                        <input type="text" name="nome" placeholder="Seu nome" class="w-full p-3 border rounded-lg" required>
                        <input type="email" name="email" placeholder="Seu e-mail" class="w-full p-3 border rounded-lg" required>
                        <input type="tel" name="telefone" placeholder="Seu telefone" class="w-full p-3 border rounded-lg" required>
                        <textarea placeholder="Mensagem (opcional)" name="mensagem" class="w-full p-3 border rounded-lg h-24"></textarea>
                        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-lg font-semibold">
                            Enviar mensagem
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="bg-white rounded-lg shadow-md p-6 sticky top-4">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Interessado no imóvel?</h2>
            
            <div class="flex items-center justify-between mb-4">
                <span class="text-2xl font-bold text-blue-500">R$ 1.250.000</span>
                <button class="text-gray-400 hover:text-red-500">
                    <i class="fas fa-heart text-2xl"></i>
                </button>
            </div>
            
            <div class="space-y-4 mb-6">
                <button class="w-full bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-lg font-semibold flex items-center justify-center">
                    <i class="fas fa-phone-alt mr-2"></i> Falar com corretor
                </button>
                <button class="w-full bg-green-500 hover:bg-green-600 text-white py-3 rounded-lg font-semibold flex items-center justify-center">
                    <i class="fas fa-whatsapp mr-2"></i> WhatsApp
                </button>
                <button class="w-full bg-gray-200 hover:bg-gray-300 text-gray-800 py-3 rounded-lg font-semibold flex items-center justify-center">
                    <i class="fas fa-envelope mr-2"></i> Enviar e-mail
                </button>
            </div>
        </div>
    </div>
</div>

<?php include_once '../../core/consulta/imoveis/imoveis.php'; ?>

<div class="mb-12">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Imóveis semelhantes</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
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
</div>
<script>
    
</script>