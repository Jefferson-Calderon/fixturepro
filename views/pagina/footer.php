<footer class="bg-[#0F172A] text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="opacity-0 transform translate-y-5 animate-fadeIn">
                <h3 class="text-2xl font-bold mb-4">Full Sport</h3>
                <p class="text-gray-400 mb-4">Tu plataforma definitiva para seguir y analizar todos los deportes en un
                    solo lugar.</p>
            </div>

            <!-- Sección de links dinámicos -->
            <div class="opacity-0 transform translate-y-5 animate-fadeIn delay-100">
                <h3 class="font-semibold mb-4">Deportes</h3>
                <ul class="space-y-2">
                    <li class="hover:translate-x-1 transition-transform">
                        <a href="#" class="text-gray-400 hover:text-[#38BDF8] transition-colors">Fútbol</a>
                    </li>
                    <li class="hover:translate-x-1 transition-transform">
                        <a href="#" class="text-gray-400 hover:text-[#38BDF8] transition-colors">Baloncesto</a>
                    </li>
                    <li class="hover:translate-x-1 transition-transform">
                        <a href="#" class="text-gray-400 hover:text-[#38BDF8] transition-colors">Tenis</a>
                    </li>
                    <li class="hover:translate-x-1 transition-transform">
                        <a href="#" class="text-gray-400 hover:text-[#38BDF8] transition-colors">Fórmula 1</a>
                    </li>
                </ul>
            </div>

            <div class="opacity-0 transform translate-y-5 animate-fadeIn delay-200">
                <h3 class="font-semibold mb-4">Compañía</h3>
                <ul class="space-y-2">
                    <li class="hover:translate-x-1 transition-transform">
                        <a href="#" class="text-gray-400 hover:text-[#38BDF8] transition-colors">Sobre nosotros</a>
                    </li>
                    <li class="hover:translate-x-1 transition-transform">
                        <a href="#" class="text-gray-400 hover:text-[#38BDF8] transition-colors">Carreras</a>
                    </li>
                    <li class="hover:translate-x-1 transition-transform">
                        <a href="#" class="text-gray-400 hover:text-[#38BDF8] transition-colors">Prensa</a>
                    </li>
                    <li class="hover:translate-x-1 transition-transform">
                        <a href="#" class="text-gray-400 hover:text-[#38BDF8] transition-colors">Blog</a>
                    </li>
                </ul>
            </div>

            <div class="opacity-0 transform translate-y-5 animate-fadeIn delay-300">
                <h3 class="font-semibold mb-4">Soporte</h3>
                <ul class="space-y-2">
                    <li class="hover:translate-x-1 transition-transform">
                        <a href="#" class="text-gray-400 hover:text-[#38BDF8] transition-colors">Centro de ayuda</a>
                    </li>
                    <li class="hover:translate-x-1 transition-transform">
                        <a href="#" class="text-gray-400 hover:text-[#38BDF8] transition-colors">Contacto</a>
                    </li>
                    <li class="hover:translate-x-1 transition-transform">
                        <a href="#" class="text-gray-400 hover:text-[#38BDF8] transition-colors">Política de
                            privacidad</a>
                    </li>
                    <li class="hover:translate-x-1 transition-transform">
                        <a href="#" class="text-gray-400 hover:text-[#38BDF8] transition-colors">Términos de uso</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer inferior con fecha dinámica -->
        <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400 opacity-0 animate-fadeIn delay-400">
            <p>&copy; <span id="current-year"></span><a href="#"> Magus Technologies</a>. Todos los derechos reservados.
            </p>
        </div>
    </div>
</footer>

<style>
    @keyframes fadeIn {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 0.5s forwards;
    }

    .delay-100 {
        animation-delay: 0.1s;
    }

    .delay-200 {
        animation-delay: 0.2s;
    }

    .delay-300 {
        animation-delay: 0.3s;
    }

    .delay-400 {
        animation-delay: 0.4s;
    }
</style>

<script>
    document.getElementById("current-year").textContent = new Date().getFullYear();
</script>
