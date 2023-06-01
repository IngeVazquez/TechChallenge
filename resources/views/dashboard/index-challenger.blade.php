<x-layouts.app title="Challenges" meta-description="Challenges meta description">

    <header class="px-6 py-4 space-y-2 text-center">
        <h1 class="font-sans text-3xl text-sky-600 dark:text-sky-500">Challenges</h1>
    </header>


   {{-- Flowbite --}}
<div class="overflow-x-auto shadow-xl sm:rounded-lg p-4 bg-white">
@if ($challengeData->count() == 0)
<div>
    <p class="text-center">
        NO TIENES REGISTROS
    </p>

</div>

@else
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Título
                </th>
                <th scope="col" class="px-6 py-3">
                    Descripción
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        @endif

        @foreach ($challengeData as $challenge)

        <tbody>

            <tr class="bg-white hover:bg-cyan-200 border-b dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600">
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="pl-3">
                        <div class="text-base font-semibold">  </div>
                        <div class="font-normal text-gray-500"> {{$challenge->titulo}}</div>
                    </div>
                </th>
                <td class="px-6 py-4">
                    {{$challenge->descripcion}}
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> Online
                    </div>
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Subir evidencia</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

    <main class="mb-12 grid w-full gap-4 px-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3 md:ml-5">

    </main>
</x-layouts.app>

