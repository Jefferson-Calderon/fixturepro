<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<!-- SweetAlert2 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<main class="flex-1 p-4">
    <!-- Contenedor de Tarjetas de Competición -->
    <div id="competition-cards" class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <!-- Aquí se cargarán las tarjetas de competición -->
    </div>
</main>

<script>
    // Cargar competiciones desde localStorage al cargar la página
    document.addEventListener("DOMContentLoaded", loadCompetitionsFromStorage);

    function loadCompetitionsFromStorage() {
        const competitions = JSON.parse(localStorage.getItem("competitions")) || [];
        const container = document.getElementById("competition-cards");

        if (competitions.length > 0) {
            competitions.forEach(competition => addCompetitionCard(container, competition));
        } else {
            container.innerHTML = '<div class="col-span-full text-center text-gray-400">No hay competiciones disponibles en este momento.</div>';
        }
    }

    // Función para mostrar el mensaje de éxito y agregar una nueva tarjeta
    function showSuccessMessageAndAddCard(competition) {
        Swal.fire({
            title: '¡Competición creada!',
            text: `La competición "${competition.nombre}" ha sido creada exitosamente.`,
            icon: 'success',
            confirmButtonText: 'Cerrar',
            background: '#1a202c',
            color: '#fff',
            confirmButtonColor: '#4a90e2',
            customClass: {
                popup: 'rounded-lg shadow-lg',
                title: 'font-semibold text-lg',
                confirmButton: 'py-2 px-4'
            }
        });

        const container = document.getElementById("competition-cards");

        // Añadir la competición al DOM
        addCompetitionCard(container, competition);

        // Guardar la competición en localStorage
        saveCompetitionToStorage(competition);
    }

    // Función para añadir la tarjeta de competición al contenedor
    function addCompetitionCard(container, competition) {
        const card = document.createElement("div");
        card.classList.add("border", "rounded-lg", "bg-gray-800", "shadow-md", "p-4", "space-y-4");

        card.innerHTML = `
            <h3 class="font-semibold text-center text-blue-500">${competition.nombre}</h3>
            <hr class="border-gray-700">
            <p class="text-center text-gray-400">${competition.descripcion}</p>
            <div class="flex justify-between text-sm">
                <span>Tipo: ${competition.tipo_competicion_id}</span>
                <span>Deporte: ${competition.deporte_id}</span>
            </div>
            <div class="text-sm text-center">Género: ${competition.genero_id}</div>
            <div class="text-center mt-4">
                <a href="${competition.url_name}" class="text-blue-500 hover:underline">Ver más</a>
            </div>
        `;

        container.prepend(card);

        // Eliminar mensaje de "No hay competiciones" si está presente
        const emptyMessage = container.querySelector(".col-span-full");
        if (emptyMessage) {
            emptyMessage.remove();
        }
    }

    // Función para guardar la competición en localStorage
    function saveCompetitionToStorage(competition) {
        const competitions = JSON.parse(localStorage.getItem("competitions")) || [];
        competitions.push(competition);
        localStorage.setItem("competitions", JSON.stringify(competitions));
    }
</script>
