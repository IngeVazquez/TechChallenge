<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechChallenges - {{ $title ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description'}}">
    {{-- Alpinejs --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/custom.js' ])
</head>
<body class="bg-slate-100 dark:bg-slate-900 mx-2.5 my-2.5">
    <x-layouts.nav />
    @if (session('status'))
    <div id="mensaje" class="flex justify-center">
        <div class="w-96 rounded-lg mt-3 text-center max-w-screen-xl px-3 py-2 mx-auto text-white sm:px-6 lg:px-8
        bg-emerald-500 dark:bg-emerald-700"> {{session('status')}} </div>
    </div>
    @endif

    @if (session('mensaje'))
    <div id="mensaje" class="flex justify-center">
        <div class="w-96 rounded-lg mt-3 text-center max-w-screen-xl px-3 py-2 mx-auto text-white sm:px-6 lg:px-8
        bg-red-400 dark:bg-emerald-700"> {{session('mensaje')}} </div>
    </div>
    @endif

    {{ $slot }}
</body>
</html>
