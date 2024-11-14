<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FullSport - Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #6B46C1;
            --secondary-color: #805AD5;
            --accent-color: #38B2AC;
        }
    </style>
</head>

<body class="min-h-screen bg-gray-900 text-white">
    <header class="bg-primary-color py-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center gap-2">
                <img alt="Avatar" class="rounded-full" height="32" width="32" src="img/logo.png" />
                <a href="#" class="text-2xl font-bold">FullSport</a>
            </div>

            <div class="flex items-center space-x-4 relative">
                <button onclick="openModal()"
                    class="bg-secondary-color hover:bg-purple-700 text-white px-4 py-2 rounded-lg">
                    <i class="fas fa-trophy mr-2"></i>Mis Competiciones
                </button>

                <button class="text-white">
                    <i class="fas fa-bell text-lg"></i>
                </button>
                <button
                    class="rounded-full w-8 h-8 bg-accent-color text-white flex items-center justify-center">5</button>

                <!-- Contenedor del usuario con menú desplegable -->
                <div class="flex items-center gap-2 text-white relative">
                    <span>{{ Auth::user()->name }}</span>
                    <img alt="Avatar" class="rounded-full cursor-pointer" height="32" width="32" src="img/usuario1.png"
                        style="aspect-ratio: 1 / 1; object-fit: cover;" onclick="toggleDropdown()" />

                    <!-- Menú desplegable -->
                    <div id="dropdownMenu"
                        class="absolute top-full mt-2 right-0 w-48 bg-gray-100 rounded-lg shadow-lg hidden">
                        <ul class="text-gray-800">
                            <li class="px-4 py-2 hover:bg-gray-200">Mis Competiciones</li>
                            <li class="px-4 py-2 hover:bg-gray-200">Mis Equipos</li>
                            <li class="px-4 py-2 hover:bg-gray-200">Invitaciones</li>
                            <li class="px-4 py-2 hover:bg-gray-200">Editar Perfil</li>
                            <li class="px-4 py-2 hover:bg-gray-200">Productos Comprados</li>
                            <li class="px-4 py-2 hover:bg-gray-200">Mis Anuncios</li>
                            <li class="px-4 py-2 hover:bg-gray-200">Términos y privacidad</li>
                            <li class="px-4 py-2 hover:bg-gray-200 text-red-500">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="w-full text-left">Cerrar sesión</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="flex">
        <aside class="w-64 border-r border-gray-800 h-screen sticky top-0 bg-gray-800 shadow-lg">
            <div class="h-full py-4 px-3">
                <h2 class="mb-4 text-lg font-semibold">Menú Principal</h2>
                <nav class="space-y-1">
                    <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-700 text-gray-300">
                        <i class="fas fa-home"></i><span>Inicio</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-700 text-gray-300">
                        <i class="fas fa-trophy"></i><span>Torneos Mundiales</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-700 text-gray-300">
                        <i class="fas fa-flag"></i><span>Ligas Internacionales</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-700 text-gray-300">
                        <i class="fas fa-plus-circle"></i><span>Crear Torneo Local</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-700 text-gray-300">
                        <i class="fas fa-shopping-bag"></i><span>Tienda</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-700 text-gray-300">
                        <i class="fas fa-users"></i><span>Equipos</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-700 text-gray-300">
                        <i class="fas fa-tools"></i><span>Herramientas</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-700 text-gray-300">
                        <i class="fas fa-newspaper"></i><span>Noticias</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-700 text-gray-300">
                        <i class="fas fa-question-circle"></i><span>Ayuda-Soporte</span>
                    </a>
                </nav>
            </div>
        </aside>

        <main class="flex-1 p-4">
            <div class="grid gap-4">
                <div class="border rounded-lg bg-gray-800 shadow-md p-4 space-y-4">
                    <h3 class="font-semibold text-center text-accent-color">TORNEO VII</h3>
                    <hr class="border-gray-700">
                    <div class="flex items-center justify-between px-4">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-gray-700 rounded-full"></div>
                            <span>LOBOS FC</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="px-3 py-1 bg-gray-700 text-white rounded text-sm">vs</span>
                            <div class="text-sm text-gray-400 mt-1">00:00 - 10 de nov 2024</div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span>ZAMAEL FC</span>
                            <div class="w-8 h-8 bg-gray-700 rounded-full"></div>
                        </div>
                    </div>
                </div>

                <div class="border rounded-lg bg-gray-800 shadow-md p-4 space-y-4">
                    <h3 class="font-semibold text-center text-accent-color">CAMPEONATO MUNDIAL</h3>
                    <hr class="border-gray-700">
                    <div class="flex items-center justify-between px-4">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-gray-700 rounded-full"></div>
                            <span>PAÍS A</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="px-3 py-1 bg-gray-700 text-white rounded text-sm">vs</span>
                            <div class="text-sm text-gray-400 mt-1">15:00 - 12 de dic 2024</div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span>PAÍS B</span>
                            <div class="w-8 h-8 bg-gray-700 rounded-full"></div>
                        </div>
                    </div>
                </div>

                <div class="border rounded-lg bg-gray-800 shadow-md p-4 space-y-4">
                    <h3 class="font-semibold text-center text-accent-color">LIGA NACIONAL</h3>
                    <hr class="border-gray-700">
                    <div class="flex items-center justify-between px-4">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-gray-700 rounded-full"></div>
                            <span>TEAM X</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="px-3 py-1 bg-gray-700 text-white rounded text-sm">vs</span>
                            <div class="text-sm text-gray-400 mt-1">18:00 - 15 de nov 2024</div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span>TEAM Y</span>
                            <div class="w-8 h-8 bg-gray-700 rounded-full"></div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
                    <div class="bg-gray-800 border rounded-lg shadow-md p-6 w-full max-w-md relative">
                        <!-- Botón de cierre -->
                        <button onclick="closeModal()"
                            class="absolute top-2 right-2 text-white text-xl font-semibold">&times;</button>

                        <h3 class="font-semibold text-center text-accent-color">Crear Nueva Competición</h3>

                        <form class="space-y-4 mt-4">
                            <input type="text" placeholder="Nombre de tu Competición:"
                                class="w-full p-2 border border-gray-700 bg-gray-700 rounded text-white" required>
                            <input type="text" placeholder="Descripción Corta:"
                                class="w-full p-2 border border-gray-700 bg-gray-700 rounded text-white" required>
                            <div class="flex space-x-4">
                                <div class="w-1/2">
                                    <input type="text" placeholder="Tipo Competición:"
                                        class="w-full p-2 border border-gray-700 bg-gray-700 rounded text-white"
                                        required>
                                </div>
                                <div class="w-1/2">
                                    <input type="text" placeholder="Deporte:"
                                        class="w-full p-2 border border-gray-700 bg-gray-700 rounded text-white"
                                        required>
                                </div>
                            </div>
                            <input type="text" placeholder="Género:"
                                class="w-full p-2 border border-gray-700 bg-gray-700 rounded text-white" required>

                            <!-- Sección de Competición URL -->
                            <div class="space-y-2">
                                <label for="url" class="block text-white">Competición URL</label>
                                <div class="flex items-center space-x-2">
                                    <input type="text" id="url" name="urlName" placeholder="Enter unique name"
                                        class="w-full p-2 border border-gray-700 bg-gray-700 rounded text-white"
                                        required />
                                    <button type="button"
                                        class="button-secondary p-2 text-white border border-gray-700 rounded">Verificar</button>
                                </div>
                                <p class="text-sm text-muted-foreground">
                                    Personaliza este campo para tener una URL única para tu campeonato.
                                </p>
                            </div>

                            <button type="submit"
                                class="button w-full p-2 text-white bg-accent-color hover:bg-accent-color-dark rounded">Crear
                                Competición</button>
                        </form>
                    </div>
                </div>

            </div>
        </main>
    </div>
    <script>
        function toggleDropdown() {
            const dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.classList.toggle('hidden');
        }

        document.addEventListener('click', function (event) {
            const dropdownMenu = document.getElementById('dropdownMenu');
            const avatar = event.target.closest('img[onclick="toggleDropdown()"]');
            if (!avatar && dropdownMenu && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });

        function openModal() {
            document.getElementById('modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }

        window.onclick = function (event) {
            const modal = document.getElementById('modal');
            if (event.target === modal) {
                closeModal();
            }
        }
    </script>
</body>

</html>
