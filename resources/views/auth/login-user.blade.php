<x-layouts.app title="Login" meta-description="Login meta description">

    <h1 class="my-4 font-sans text-3xl text-center text-sky-600 dark:text-sky-500">Inicia sesión</h1>
    <x-forms.form-login />
    <script>
    setTimeout(function() {
        var mensaje = document.getElementById('mensaje');
        mensaje.parentNode.removeChild(mensaje);
    }, 5000); // Elimina el mensaje después de 5 segundos

        </script>
</x-layouts.app>
