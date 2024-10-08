<x-layouts.app
    :title="$challenge->titulo"
    {{-- Lo ideal es agrgarle otro campo y darle un tratamiento especial para posicionamiento --}}
    :meta-Description="$challenge->descripcion"

>

<h1  class="my-4 font-sans text-3xl text-center text-sky-600 dark:text-sky-500"">
    Actualizar los datos
</h1>

<form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800"
    method="POST" action="{{route('challenges.update', $challenge)}}" enctype="multipart/form-data">
    {{-- Directiva que añade el token CSRF para prevenir los ataques de este tipo,
         el tiempo de vida del token es de dos horas
    --}}
    @csrf @method('PATCH')
    @include('challenges.form-fields', ["task" => "edit"])

    <div class="flex items-center justify-between mt-4">
        <a class="text-sm font-semibold underline border-2 border-transparent rounded
        dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none"
        href="{{ route('challenges.index') }}">
            Regresar
        </a>

    

        <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest
         text-center text-white uppercase transition duration-150 ease-in-out border border-2
         border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700
         focus:outline-none focus:border-sky-500" type="submit">
            Actualizar
        </button>
    </div>
</form>
</x-layouts.app>
