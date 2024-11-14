<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>FullSport - Dashboard</title>
</head>
<!-- Modal -->
<div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-gray-800 border rounded-lg shadow-md p-6 w-full max-w-md relative">
        <!-- Botón de cierre -->
        <button onclick="closeModal()" class="absolute top-2 right-2 text-white text-xl font-semibold">&times;</button>

        <h3 class="font-semibold text-center text-accent-color">Crear Nueva Competición</h3>

        <form id="competitionForm" class="space-y-4 mt-4" method="POST" action="{{ route('competicion.store') }}">
            @csrf
            <input type="text" name="nombre" placeholder="Nombre de tu Competición:"
                   class="w-full p-2 border border-gray-700 bg-gray-700 rounded text-white" required>
            <input type="text" name="descripcion" placeholder="Descripción Corta:"
                   class="w-full p-2 border border-gray-700 bg-gray-700 rounded text-white" required>

            <div class="flex space-x-4">
                <div class="w-1/2">
                    <select name="tipo_competicion_id" class="w-full p-2 border border-gray-700 bg-gray-700 rounded text-white" required>
                        <option value="" disabled selected>Tipo Competición</option>
                        <option value="aficionado">Aficionado</option>
                        <option value="profesional">Profesional</option>
                    </select>
                </div>
                <div class="w-1/2">
                    <select name="deporte_id" class="w-full p-2 border border-gray-700 bg-gray-700 rounded text-white" required>
                        <option value="" disabled selected>Deporte</option>
                        <option value="futbol">Futbol</option>
                        <option value="futbol7">Futbol 7</option>
                        <option value="futsal">Futsal</option>
                        <option value="futbito">Futbito</option>
                        <option value="futbol8">Futbol 8</option>
                    </select>
                </div>
            </div>
            <select name="genero_id" class="w-full p-2 border border-gray-700 bg-gray-700 rounded text-white" required>
                <option value="" disabled selected>Género</option>
                <option value="general">General</option>
                <option value="varones">Varones</option>
                <option value="mujeres">Mujeres</option>
            </select>

            <!-- Sección de Competición URL -->
            <div class="space-y-2">
                <label for="url" class="block text-white">Competición URL</label>
                <div class="flex items-center space-x-2">
                    <label class="block text-white">fullsportplay.com/</label>
                    <input type="text" id="url" name="urlName" placeholder="Nombre único"
                           class="w-full p-2 border border-gray-700 bg-gray-700 rounded text-white" required />
                    <button type="button" id="verifyUrl" class="button-secondary p-2 text-white border border-gray-700 rounded">Verificar</button>
                </div>
                <p id="urlAvailability" class="text-sm text-muted-foreground hidden">
                    Personaliza este campo para tener una URL única para tu competición.
                </p>
            </div>

            <button type="submit" class="button w-full p-2 text-white bg-accent-color hover:bg-accent-color-dark rounded">
                Crear Competición
            </button>
        </form>
    </div>
</div>

<script>
    // Mostrar mensaje de disponibilidad de la URL
    document.getElementById('url').addEventListener('input', function () {
        const urlName = this.value;
        const availabilityMessage = document.getElementById('urlAvailability');

        // Ocultar el mensaje si el campo está vacío
        if (urlName.trim() === '') {
            availabilityMessage.classList.add('hidden');
            return;
        } else {
            availabilityMessage.classList.remove('hidden');
        }
    });

    // Verificar disponibilidad de URL
    document.getElementById('verifyUrl').addEventListener('click', function () {
        const urlName = document.getElementById('url').value;
        if (urlName.trim() === '') return;

        fetch("{{ route('competicion.verifyUrl') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ urlName: urlName })
        })
            .then(response => response.json())
            .then(data => {
                const availabilityMessage = document.getElementById('urlAvailability');
                if (data.available) {
                    availabilityMessage.textContent = 'Esta URL está disponible.';
                    availabilityMessage.className = 'text-sm text-green-500';
                } else {
                    availabilityMessage.textContent = 'Esta URL ya está en uso. Por favor, elige otra.';
                    availabilityMessage.className = 'text-sm text-red-500';
                }
            })
            .catch(error => console.error('Error:', error));
    });

    // Manejar el envío del formulario
    document.getElementById('competitionForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(this);

        fetch("{{ route('competicion.store') }}", {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showSuccessMessageAndAddCard(data.competition);
                closeModal();
            } else {
                alert('Error al crear la competición: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Ha ocurrido un error al crear la competición.');
        });
    });
</script>

