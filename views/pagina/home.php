<section class="bg-custom-dark text-white py-20 overflow-hidden">
    <div class="container mx-auto px-4 flex flex-col lg:flex-row items-center">
        <div class="lg:w-1/2 mb-10 lg:mb-0">
            <h1 class="text-4xl lg:text-6xl font-bold mb-6 animate__animated animate__fadeInUp">
                Vive la pasión del deporte con Full Sports
            </h1>
            <p class="text-xl mb-8 animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                Sigue a tus equipos favoritos, analiza estadísticas en tiempo real y conecta con otros fanáticos del deporte.
            </p>
            <div class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#" class="bg-custom-blue text-custom-dark px-10 py-3 rounded font-bold hover:bg-custom-red transition duration-300">
                    Comienza ahora
                </a>
                <a href="#" class="bg-custom-red text-custom-dark px-10 py-3 rounded font-bold hover:bg-custom-blue transition duration-300">
                    Explora deportes
                </a>
            </div>
        </div>
        <div class="lg:w-1/2 relative w-full h-[300px] sm:h-[400px] md:h-[500px] lg:h-[600px] animate__animated animate__fadeInUp">
            <div class="absolute inset-0 bg-gradient-to-r from-custom-blue-20 to-transparent rounded-lg animate__animated animate__fadeInUp">
                <!-- Animación de fondo -->
            </div>
            <div class="relative w-full h-full overflow-hidden">
                <img src="public/img/fondo1.png" alt="Jugador de fútbol en acción" class="object-contain w-full h-full transition-transform duration-500 ease-in-out transform hover:scale-105" style="filter: drop-shadow(0 0 20px rgba(56, 189, 248, 0.3));">
            </div>
            <div class="absolute -bottom-10 -left-10 bg-white/10 backdrop-blur-md p-6 rounded-lg shadow-xl animate__animated animate__fadeInUp" style="animation-delay: 0.5s;">
                <div class="flex items-center space-x-4">
                    <div class="bg-custom-blue rounded-full p-3">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold text-lg animate__animated animate__fadeInUp" style="animation-delay: 0.5s;">
                            Super League 2024
                        </p>
                        <p class="text-gray-300">¡Únete ahora!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Custom styles to replicate Tailwind classes */
    .bg-custom-dark { background-color: #0F172A; }
    .bg-custom-blue { background-color: #38BDF8; }
    .text-custom-dark { color: #0F172A; }
    .bg-custom-red { background-color: #f34739; }
    .hover\:bg-custom-red:hover { background-color: #d63c30; }
    .hover\:bg-custom-blue:hover { background-color: #0EA5E9; }
    .from-custom-blue-20 { --tw-gradient-from: rgba(56, 189, 248, 0.2); }

    /* Animate.css classes */
    .animate__animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }
    .animate__fadeInUp {
        -webkit-animation-name: fadeInUp;
        animation-name: fadeInUp;
    }
    @-webkit-keyframes fadeInUp {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }
        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }
    @keyframes fadeInUp {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }
        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }
</style>