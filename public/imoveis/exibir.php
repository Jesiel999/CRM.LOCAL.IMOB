<?php
include_once '../../core/db.php';
include_once '../../core/listar/imoveiseditar.php';
?>
 <div class="flex items-center text-sm text-gray-500 mb-6">
    <a href="#" class="hover:text-blue-500">Home</a>
    <span class="mx-2">/</span>
    <a href="#" class="hover:text-blue-500">Imóveis à venda</a>
    <span class="mx-2">/</span>
    <span class="text-gray-400">Detalhes do imóvel</span>
</div>

<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
    <div>
        <h1 class="text-3xl font-bold text-gray-800">Casa Moderna - Jardins</h1>
        <div class="flex items-center mt-2">
            <i class="fas fa-map-marker-alt text-gray-400 mr-2"></i>
            <span class="text-gray-600">Rua Oscar Freire, 1200 - Jardins, São Paulo - SP</span>
        </div>
    </div>
    <div class="mt-4 md:mt-0">
        <span class="text-2xl font-bold text-blue-500">R$ 1.250.000</span>
        <span class="text-gray-500 block text-right">Condomínio: R$ 1.200</span>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-4 gap-4 mb-8">

    <div class="lg:col-span-3 rounded-lg overflow-hidden">
        <img id="main-image" src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                alt="Casa moderna" class="w-full h-96 object-cover property-image rounded-lg">
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-1 gap-2">
        <img src="https://images.unsplash.com/photo-1583847268964-b28dc8f51f92?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                alt="Sala de estar" 
                class="h-28 w-full object-cover rounded-lg thumbnail active"
                onclick="changeMainImage(this)">
        
        <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80" 
                alt="Cozinha" 
                class="h-28 w-full object-cover rounded-lg thumbnail"
                onclick="changeMainImage(this)">
        
        <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1400&q=80" 
                alt="Quarto" 
                class="h-28 w-full object-cover rounded-lg thumbnail"
                onclick="changeMainImage(this)">
        
        <img src="https://images.unsplash.com/photo-1600566752227-8f3b1d137d92?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                alt="Área externa" 
                class="h-28 w-full object-cover rounded-lg thumbnail"
                onclick="changeMainImage(this)">
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">

    <div class="lg:col-span-2">

        <div class="flex border-b mb-6">
            <button class="tab-button px-4 py-2 mr-2 active" onclick="changeTab('description')">Descrição</button>
            <button class="tab-button px-4 py-2 mr-2" onclick="changeTab('features')">Características</button>
            <button class="tab-button px-4 py-2 mr-2" onclick="changeTab('location')">Localização</button>
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
                            <span class="font-medium">180 m²</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Área total</span>
                            <span class="font-medium">300 m²</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Quartos</span>
                            <span class="font-medium">3</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Banheiros</span>
                            <span class="font-medium">2 (1 suíte)</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Vagas</span>
                            <span class="font-medium">2</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Ano de construção</span>
                            <span class="font-medium">2015</span>
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

        <div id="location" class="tab-content hidden">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Localização</h2>
            <div class="map-container mb-4 rounded-lg overflow-hidden">

                <img src="https://maps.googleapis.com/maps/api/staticmap?center=-23.563987,-46.653568&zoom=15&size=800x300&maptype=roadmap&markers=color:red%7C-23.563987,-46.653568&key=YOUR_API_KEY" 
                        alt="Mapa da localização" class="w-full h-full object-cover">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-bold text-gray-700 mb-2">Endereço</h3>
                    <p class="text-gray-600">
                        Rua Oscar Freire, 1200<br>
                        Jardins - São Paulo/SP<br>
                        CEP: 01426-001
                    </p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-700 mb-2">Próximo a</h3>
                    <ul class="text-gray-600 space-y-1">
                        <li><i class="fas fa-store mr-2 text-blue-500"></i> Shopping Iguatemi - 500m</li>
                        <li><i class="fas fa-subway mr-2 text-blue-500"></i> Metrô Trianon-Masp - 800m</li>
                        <li><i class="fas fa-school mr-2 text-blue-500"></i> Escola St. Paul's - 1km</li>
                        <li><i class="fas fa-hospital mr-2 text-blue-500"></i> Hospital Sírio-Libanês - 1.2km</li>
                    </ul>
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
                    <form class="space-y-3">
                        <input type="text" placeholder="Seu nome" class="w-full p-3 border rounded-lg">
                        <input type="email" placeholder="Seu e-mail" class="w-full p-3 border rounded-lg">
                        <input type="tel" placeholder="Seu telefone" class="w-full p-3 border rounded-lg">
                        <textarea placeholder="Mensagem (opcional)" class="w-full p-3 border rounded-lg h-24"></textarea>
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
            
            <div class="border-t pt-4">
                <h3 class="font-bold text-gray-700 mb-2">Financiamento</h3>
                <p class="text-gray-600 mb-3">
                    Simule seu financiamento e descubra as parcelas mensais deste imóvel.
                </p>
                <button class="w-full bg-purple-500 hover:bg-purple-600 text-white py-2 rounded-lg font-medium">
                    Simular financiamento
                </button>
            </div>
        </div>
    </div>
</div>

<div class="mb-12">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Imóveis semelhantes</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80" 
                        alt="Apartamento similar" class="w-full h-48 object-cover">
                <div class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md">
                    <i class="fas fa-heart text-gray-400 cursor-pointer"></i>
                </div>
            </div>
            <div class="p-4">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="font-bold text-lg text-gray-800">Apartamento - Higienópolis</h3>
                    <span class="text-blue-500 font-bold">R$ 980.000</span>
                </div>
                <p class="text-gray-600 text-sm mb-3">São Paulo - SP</p>
                <div class="flex justify-between text-sm text-gray-500 border-t pt-3">
                    <span><i class="fas fa-bed mr-1"></i> 3 quartos</span>
                    <span><i class="fas fa-bath mr-1"></i> 2 banheiros</span>
                    <span><i class="fas fa-ruler-combined mr-1"></i> 110m²</span>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1600566752227-8f3b1d137d92?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                        alt="Casa similar" class="w-full h-48 object-cover">
                <div class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md">
                    <i class="fas fa-heart text-gray-400 cursor-pointer"></i>
                </div>
            </div>
            <div class="p-4">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="font-bold text-lg text-gray-800">Casa - Vila Nova Conceição</h3>
                    <span class="text-blue-500 font-bold">R$ 1.450.000</span>
                </div>
                <p class="text-gray-600 text-sm mb-3">São Paulo - SP</p>
                <div class="flex justify-between text-sm text-gray-500 border-t pt-3">
                    <span><i class="fas fa-bed mr-1"></i> 4 quartos</span>
                    <span><i class="fas fa-bath mr-1"></i> 3 banheiros</span>
                    <span><i class="fas fa-ruler-combined mr-1"></i> 220m²</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1583847268964-b28dc8f51f92?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                        alt="Cobertura similar" class="w-full h-48 object-cover">
                <div class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md">
                    <i class="fas fa-heart text-gray-400 cursor-pointer"></i>
                </div>
            </div>
            <div class="p-4">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="font-bold text-lg text-gray-800">Cobertura - Itaim Bibi</h3>
                    <span class="text-blue-500 font-bold">R$ 2.150.000</span>
                </div>
                <p class="text-gray-600 text-sm mb-3">São Paulo - SP</p>
                <div class="flex justify-between text-sm text-gray-500 border-t pt-3">
                    <span><i class="fas fa-bed mr-1"></i> 3 quartos</span>
                    <span><i class="fas fa-bath mr-1"></i> 3 banheiros</span>
                    <span><i class="fas fa-ruler-combined mr-1"></i> 180m²</span>
                </div>
            </div>
        </div>
    </div>
</div>