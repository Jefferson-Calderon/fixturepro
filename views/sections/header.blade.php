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
