<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

@vite('resources/css/app.css')
<body>
<div class="min-h-screen bg-gradient-to-br from-[#0F172A] to-[#1E293B]">
    <!-- Sidebar -->
    <aside class="fixed left-0 top-0 h-full w-64 bg-[#1E293B] text-white p-4 space-y-6">
        <div class="flex items-center space-x-3">
            <img src="/img/logo.png" alt="Full Sports" class="w-10 h-10">
            <span class="text-xl font-bold">FULL SPORTS</span>
        </div>

        <nav class="space-y-2">
            <a href="#" class="flex items-center space-x-3 p-3 rounded-lg bg-[#7C3AED] text-white">
                <i class="fas fa-chart-line"></i>
                <span>Panel de Control</span>
            </a>
            <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-[#374151] text-gray-300">
                <i class="fas fa-users"></i>
                <span>Equipos</span>
            </a>
            <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-[#374151] text-gray-300">
                <i class="fas fa-calendar"></i>
                <span>Eventos</span>
            </a>
            <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-[#374151] text-gray-300">
                <i class="fas fa-message"></i>
                <span>Mensajes</span>
            </a>
            <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-[#374151] text-gray-300">
                <i class="fas fa-chart-bar"></i>
                <span>Análisis</span>
            </a>
            <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-[#374151] text-gray-300">
                <i class="fas fa-cog"></i>
                <span>Configuración</span>
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 p-8">
        <!-- Top Bar -->
        <div class="flex justify-between items-center mb-8">
            <div class="flex-1 max-w-xl">
                <div class="relative">
                    <input type="text" placeholder="Buscar eventos, equipos..."
                           class="w-full bg-[#1E293B] text-white rounded-lg pl-10 pr-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#7C3AED]">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <button class="text-gray-400 hover:text-white">
                    <i class="fas fa-bell text-xl"></i>
                </button>
                <div class="flex items-center space-x-2">
                    <img src="/img/avatar.png" alt="Profile" class="w-10 h-10 rounded-full">
                    <span class="text-white">{{ Auth::user()->name }} ({{ Auth::user()->role->name }})</span>
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-white bg-red-500 hover:bg-red-600 px-4 py-2 rounded">
                        Cerrar Sesión
                    </button>
                </form>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-gradient-to-r from-pink-500 to-rose-500 rounded-xl p-6 text-white">
                <div class="text-lg mb-2">Total de Atletas</div>
                <div class="text-3xl font-bold mb-2">1,234</div>
                <div class="text-sm">+10% desde el mes pasado</div>
            </div>
            <div class="bg-gradient-to-r from-violet-500 to-purple-500 rounded-xl p-6 text-white">
                <div class="text-lg mb-2">Equipos Activos</div>
                <div class="text-3xl font-bold mb-2">56</div>
                <div class="text-sm">+3 nuevos equipos esta semana</div>
            </div>
            <div class="bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl p-6 text-white">
                <div class="text-lg mb-2">Próximos Eventos</div>
                <div class="text-3xl font-bold mb-2">12</div>
                <div class="text-sm">Próximo evento en 3 días</div>
            </div>
            <div class="bg-gradient-to-r from-orange-500 to-amber-500 rounded-xl p-6 text-white">
                <div class="text-lg mb-2">Ingresos Totales</div>
                <div class="text-3xl font-bold mb-2">24,560</div>
                <div class="text-sm">+15% desde el último trimestre</div>
            </div>
        </div>

        <!-- Content Sections -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <!-- Recent Activities -->
            <div class="bg-[#1E293B] rounded-xl p-6">
                <h2 class="text-xl text-white mb-4">Actividades Recientes</h2>
                <div class="space-y-4">
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white">J</div>
                        <div>
                            <div class="text-white">Registró un nuevo equipo: Thunderbolts</div>
                            <div class="text-sm text-gray-400">hace 2 horas</div>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 rounded-full bg-purple-500 flex items-center justify-center text-white">M</div>
                        <div>
                            <div class="text-white">Actualizó el calendario de eventos</div>
                            <div class="text-sm text-gray-400">hace 4 horas</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Events -->
            <div class="bg-[#1E293B] rounded-xl p-6">
                <h2 class="text-xl text-white mb-4">Próximos Eventos</h2>
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="text-white">Torneo de Fútbol</div>
                            <div class="text-sm text-gray-400">Domingo - Estadio Central</div>
                        </div>
                        <div class="text-sm text-gray-400">12/11</div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="text-white">Reunión de Entrenadores</div>
                            <div class="text-sm text-gray-400">Lunes - Sala de Conferencias</div>
                        </div>
                        <div class="text-sm text-gray-400">13/11</div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="text-white">Entrenamiento Abierto</div>
                            <div class="text-sm text-gray-400">Martes - Campo Principal</div>
                        </div>
                        <div class="text-sm text-gray-400">14/11</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Users Section -->
        <div class="bg-[#1E293B] rounded-xl p-6">
            <h2 class="text-xl text-white mb-4">Todos los Usuarios</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-[#0F172A] text-white">
                    <thead>
                        <tr class="bg-[#374151]">
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Nombre</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Rol</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Fecha de Registro</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#374151]">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                            <td class="px-6 py-4 whitespace-nowrap">john@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap">Administrador</td>
                            <td class="px-6 py-4 whitespace-nowrap">01/01/2023</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button class="text-blue-500 hover:text-blue-600 mr-2">Editar</button>
                                <button class="text-red-500 hover:text-red-600">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">Jane Smith</td>
                            <td class="px-6 py-4 whitespace-nowrap">jane@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap">Entrenador</td>
                            <td class="px-6 py-4 whitespace-nowrap">15/02/2023</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button class="text-blue-500 hover:text-blue-600 mr-2">Editar</button>
                                <button class="text-red-500 hover:text-red-600">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">Mike Johnson</td>
                            <td class="px-6 py-4 whitespace-nowrap">mike@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap">Atleta</td>
                            <td class="px-6 py-4 whitespace-nowrap">30/03/2023</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button class="text-blue-500 hover:text-blue-600 mr-2">Editar</button>
                                <button class="text-red-500 hover:text-red-600">Eliminar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>
