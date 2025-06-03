<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imóveis à Venda | Seu Portal Imobiliário</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .property-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .heart-icon {
            transition: all 0.3s ease;
        }
        .heart-icon:hover {
            transform: scale(1.2);
        }
        .heart-icon.active {
            color: #ef4444;
        }
        .filter-section {
            transition: all 0.3s ease;
        }
        .filter-section.collapsed {
            max-height: 0;
            overflow: hidden;
        }
        .price-range::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #3b82f6;
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <i class="fas fa-home text-blue-500 text-3xl mr-2"></i>
                <h1 class="text-2xl font-bold text-gray-800">CasaNova</h1>
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="#" class="text-gray-600 hover:text-blue-500">Comprar</a>
                <a href="#" class="text-gray-600 hover:text-blue-500">Alugar</a>
                <a href="#" class="text-gray-600 hover:text-blue-500">Vender</a>
                <a href="#" class="text-gray-600 hover:text-blue-500">Contato</a>
            </div>
            <div class="flex items-center space-x-4">
                <button class="md:hidden text-gray-600">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">
                    <i class="fas fa-user mr-2"></i>Entrar
                </button>
            </div>
        </div>
    </header>

    <section class="bg-blue-500 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-4xl font-bold mb-4">Encontre o imóvel dos seus sonhos</h2>
                <p class="text-xl mb-8">Mais de 10.000 propriedades disponíveis em todo o país</p>
                <div class="bg-white rounded-lg p-2 flex flex-col md:flex-row">
                    <input type="text" placeholder="Cidade, bairro ou CEP" class="flex-grow p-3 rounded border-0 text-gray-800 mb-2 md:mb-0 md:mr-2">
                    <select class="p-3 rounded border-0 text-gray-800 mb-2 md:mb-0 md:mr-2">
                        <option>Tipo de imóvel</option>
                        <option>Casa</option>
                        <option>Apartamento</option>
                        <option>Terreno</option>
                        <option>Comercial</option>
                    </select>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white p-3 rounded font-semibold">
                        <i class="fas fa-search mr-2"></i>Buscar
                    </button>
                </div>
            </div>
        </div>
    </section>


    <main class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <aside class="w-full lg:w-1/4 bg-white p-6 rounded-lg shadow-sm h-fit">
                <div class="mb-6">
                    <div class="flex justify-between items-center cursor-pointer" onclick="toggleFilterSection('price-filter')">
                        <h3 class="font-bold text-lg text-gray-800">Faixa de Preço</h3>
                        <i class="fas fa-chevron-down text-gray-500"></i>
                    </div>
                    <div class="filter-section mt-4" id="price-filter">
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-600">R$ 100.000</span>
                            <span class="text-gray-600">R$ 2.000.000</span>
                        </div>
                        <input type="range" min="100000" max="2000000" value="500000" class="w-full price-range mb-4">
                        <div class="flex justify-between">
                            <input type="number" placeholder="Mínimo" class="w-5/12 p-2 border rounded">
                            <span class="self-center">-</span>
                            <input type="number" placeholder="Máximo" class="w-5/12 p-2 border rounded">
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <div class="flex justify-between items-center cursor-pointer" onclick="toggleFilterSection('property-type')">
                        <h3 class="font-bold text-lg text-gray-800">Tipo de Imóvel</h3>
                        <i class="fas fa-chevron-down text-gray-500"></i>
                    </div>
                    <div class="filter-section mt-4" id="property-type">
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Casa (1.240)</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2" checked>
                                <span>Apartamento (856)</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Terreno (320)</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Comercial (178)</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <div class="flex justify-between items-center cursor-pointer" onclick="toggleFilterSection('bedrooms')">
                        <h3 class="font-bold text-lg text-gray-800">Quartos</h3>
                        <i class="fas fa-chevron-down text-gray-500"></i>
                    </div>
                    <div class="filter-section mt-4" id="bedrooms">
                        <div class="flex space-x-2">
                            <button class="px-3 py-1 border rounded hover:bg-blue-50">1+</button>
                            <button class="px-3 py-1 border rounded hover:bg-blue-50">2+</button>
                            <button class="px-3 py-1 border rounded bg-blue-500 text-white">3+</button>
                            <button class="px-3 py-1 border rounded hover:bg-blue-50">4+</button>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <div class="flex justify-between items-center cursor-pointer" onclick="toggleFilterSection('amenities')">
                        <h3 class="font-bold text-lg text-gray-800">Comodidades</h3>
                        <i class="fas fa-chevron-down text-gray-500"></i>
                    </div>
                    <div class="filter-section mt-4" id="amenities">
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Piscina</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2" checked>
                                <span>Garagem</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Área de Lazer</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Mobiliado</span>
                            </label>
                        </div>
                    </div>
                </div>

                <button class="w-full bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-lg font-semibold">
                    Aplicar Filtros
                </button>
            </aside>

            <div class="w-full lg:w-3/4">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Imóveis Disponíveis</h2>
                    <div class="flex items-center">
                        <span class="text-gray-600 mr-2">Ordenar por:</span>
                        <select class="p-2 border rounded">
                            <option>Mais recentes</option>
                            <option>Preço (menor primeiro)</option>
                            <option>Preço (maior primeiro)</option>
                            <option>Maior área</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    <div class="property-card bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                 alt="Casa moderna" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md">
                                <i class="fas fa-heart heart-icon text-gray-400 cursor-pointer" onclick="toggleFavorite(this)"></i>
                            </div>
                            <div class="absolute bottom-2 left-2 bg-blue-500 text-white text-xs px-2 py-1 rounded">
                                NOVO
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-bold text-lg text-gray-800">Casa Moderna - Jardins</h3>
                                <span class="text-blue-500 font-bold">R$ 1.250.000</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-3">São Paulo - SP</p>
                            <div class="flex justify-between text-sm text-gray-500 border-t pt-3">
                                <span><i class="fas fa-bed mr-1"></i> 3 quartos</span>
                                <span><i class="fas fa-bath mr-1"></i> 2 banheiros</span>
                                <span><i class="fas fa-ruler-combined mr-1"></i> 180m²</span>
                            </div>
                            <button class="w-full mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg font-medium">
                                Ver detalhes
                            </button>
                        </div>
                    </div>

                    <div class="property-card bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                 alt="Apartamento" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md">
                                <i class="fas fa-heart heart-icon text-gray-400 cursor-pointer" onclick="toggleFavorite(this)"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-bold text-lg text-gray-800">Apartamento - Centro</h3>
                                <span class="text-blue-500 font-bold">R$ 650.000</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-3">Rio de Janeiro - RJ</p>
                            <div class="flex justify-between text-sm text-gray-500 border-t pt-3">
                                <span><i class="fas fa-bed mr-1"></i> 2 quartos</span>
                                <span><i class="fas fa-bath mr-1"></i> 1 banheiro</span>
                                <span><i class="fas fa-ruler-combined mr-1"></i> 75m²</span>
                            </div>
                            <button class="w-full mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg font-medium">
                                Ver detalhes
                            </button>
                        </div>
                    </div>

                    <div class="property-card bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                 alt="Casa de luxo" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md">
                                <i class="fas fa-heart heart-icon text-gray-400 cursor-pointer" onclick="toggleFavorite(this)"></i>
                            </div>
                            <div class="absolute bottom-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">
                                VENDIDO
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-bold text-lg text-gray-800">Casa de Luxo - Alphaville</h3>
                                <span class="text-blue-500 font-bold">R$ 3.750.000</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-3">Barueri - SP</p>
                            <div class="flex justify-between text-sm text-gray-500 border-t pt-3">
                                <span><i class="fas fa-bed mr-1"></i> 5 quartos</span>
                                <span><i class="fas fa-bath mr-1"></i> 4 banheiros</span>
                                <span><i class="fas fa-ruler-combined mr-1"></i> 420m²</span>
                            </div>
                            <button class="w-full mt-4 bg-gray-400 text-white py-2 rounded-lg font-medium cursor-not-allowed">
                                Indisponível
                            </button>
                        </div>
                    </div>

                    <div class="property-card bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1605276374104-dee2a0ed3cd6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                 alt="Terreno" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md">
                                <i class="fas fa-heart heart-icon text-gray-400 cursor-pointer active" onclick="toggleFavorite(this)"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-bold text-lg text-gray-800">Terreno Residencial</h3>
                                <span class="text-blue-500 font-bold">R$ 320.000</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-3">Campinas - SP</p>
                            <div class="flex justify-between text-sm text-gray-500 border-t pt-3">
                                <span><i class="fas fa-ruler-combined mr-1"></i> 450m²</span>
                                <span><i class="fas fa-map-marker-alt mr-1"></i> Zona Leste</span>
                            </div>
                            <button class="w-full mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg font-medium">
                                Ver detalhes
                            </button>
                        </div>
                    </div>

                    <div class="property-card bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                 alt="Casa de campo" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md">
                                <i class="fas fa-heart heart-icon text-gray-400 cursor-pointer" onclick="toggleFavorite(this)"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-bold text-lg text-gray-800">Casa de Campo</h3>
                                <span class="text-blue-500 font-bold">R$ 890.000</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-3">Holambra - SP</p>
                            <div class="flex justify-between text-sm text-gray-500 border-t pt-3">
                                <span><i class="fas fa-bed mr-1"></i> 4 quartos</span>
                                <span><i class="fas fa-bath mr-1"></i> 3 banheiros</span>
                                <span><i class="fas fa-ruler-combined mr-1"></i> 280m²</span>
                            </div>
                            <button class="w-full mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg font-medium">
                                Ver detalhes
                            </button>
                        </div>
                    </div>

                    <div class="property-card bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                 alt="Casa moderna" class="w-full h-48 object-cover">
                            <div class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md">
                                <i class="fas fa-heart heart-icon text-gray-400 cursor-pointer" onclick="toggleFavorite(this)"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-bold text-lg text-gray-800">Casa Moderna - Vila Nova</h3>
                                <span class="text-blue-500 font-bold">R$ 1.150.000</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-3">São Paulo - SP</p>
                            <div class="flex justify-between text-sm text-gray-500 border-t pt-3">
                                <span><i class="fas fa-bed mr-1"></i> 3 quartos</span>
                                <span><i class="fas fa-bath mr-1"></i> 2 banheiros</span>
                                <span><i class="fas fa-ruler-combined mr-1"></i> 150m²</span>
                            </div>
                            <button class="w-full mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg font-medium">
                                Ver detalhes
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="flex justify-center mt-8">
                    <nav class="flex items-center space-x-2">
                        <button class="px-3 py-1 rounded border hover:bg-blue-50">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="px-3 py-1 rounded border bg-blue-500 text-white">1</button>
                        <button class="px-3 py-1 rounded border hover:bg-blue-50">2</button>
                        <button class="px-3 py-1 rounded border hover:bg-blue-50">3</button>
                        <span class="px-3 py-1">...</span>
                        <button class="px-3 py-1 rounded border hover:bg-blue-50">8</button>
                        <button class="px-3 py-1 rounded border hover:bg-blue-50">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </main>

    <!-- Newsletter -->
    <section class="bg-gray-100 py-12 mt-12">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Receba as melhores ofertas em seu e-mail</h2>
            <p class="text-gray-600 mb-6 max-w-2xl mx-auto">Cadastre-se para receber atualizações sobre novos imóveis que correspondam às suas preferências.</p>
            <div class="flex flex-col md:flex-row max-w-md mx-auto md:max-w-xl">
                <input type="email" placeholder="Seu melhor e-mail" class="flex-grow p-3 rounded-l-lg border-0 mb-2 md:mb-0">
                <button class="bg-blue-500 hover:bg-blue-600 text-white p-3 rounded-r-lg font-semibold">
                    Cadastrar
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">CasaNova</h3>
                    <p class="text-gray-400">Encontre o imóvel perfeito para você e sua família com a ajuda dos nossos especialistas.</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Links Úteis</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Sobre nós</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Termos de uso</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Política de privacidade</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Contato</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-2 text-gray-400"></i>
                            <span class="text-gray-400">Av. Paulista, 1000 - São Paulo/SP</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-2 text-gray-400"></i>
                            <span class="text-gray-400">(11) 4000-2000</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2 text-gray-400"></i>
                            <span class="text-gray-400">contato@casanova.com.br</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Redes Sociais</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2023 CasaNova. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Toggle favorite heart icon
        function toggleFavorite(element) {
            element.classList.toggle('active');
        }

        // Toggle filter sections
        function toggleFilterSection(id) {
            const section = document.getElementById(id);
            const icon = section.previousElementSibling.querySelector('i');
            
            section.classList.toggle('collapsed');
            icon.classList.toggle('fa-chevron-down');
            icon.classList.toggle('fa-chevron-up');
        }

        // Initialize all filter sections as collapsed on mobile
        document.addEventListener('DOMContentLoaded', function() {
            if (window.innerWidth < 1024) {
                const filterSections = document.querySelectorAll('.filter-section');
                filterSections.forEach(section => {
                    section.classList.add('collapsed');
                });
            }
        });

        window.addEventListener('resize', function() {
            const filterSections = document.querySelectorAll('.filter-section');
            
            if (window.innerWidth < 1024) {
                filterSections.forEach(section => {
                    if (!section.classList.contains('collapsed')) {
                        section.classList.add('collapsed');
                    }
                });
            } else {
                filterSections.forEach(section => {
                    section.classList.remove('collapsed');
                });
            }
        });
    </script>
</body>
</html>