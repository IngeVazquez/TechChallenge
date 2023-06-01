<x-layouts.app title="Challenges" meta-description="Challenges meta description">


    <header class="px-6 py-4 space-y-2 text-center">
        <h1 class="font-sans text-3xl text-sky-600 dark:text-sky-500">Challenges</h1>
        {{-- @auth
            <a class="inline-flex items-center px-4 py-2 text-xs font-semibold
                tracking-widest text-center text-white uppercase transition
                duration-150 ease-in-out border border-transparent rounded-md
                dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900
                focus:outline-none focus:border-sky-900 focus:shadow-outline-sky"
                href="{{ route('challenges.create') }}">Crear nuevo challenge
            </a>
        @endauth --}}
    </header>

    <main class="mb-12 grid w-full gap-4 px-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3 md:ml-5">
        @foreach ($challenges as $challenge)
        @auth
            <div class="max-w-3xl px-4 py-2 space-y-4 bg-white rounded-lg shadow dark:bg-slate-800">
                <h2 class="text-xl text-slate-600 dark:text-slate-300 hover:underline">
                    <a href="{{ route('challenges.show', $challenge) }}">
                        {{ $challenge->titulo }}

                        @if (isset($challenge->img))
                            <div class="py-2">
                                <img class="rounded shadow object-cover h-48 w-96"
                                    src="{{ asset('img_challenges/' . $challenge->img) }}" alt="">
                                    @endif
                            </div>
                </h2>
                </a>
                @endauth

                @guest
                    <div class="max-w-3xl px-4 py-2 space-y-4 bg-white rounded-lg shadow dark:bg-slate-800">
                        <h2 class="text-xl text-slate-600 dark:text-slate-300 hover:underline">
                            <a href="{{ route('login-guest', $challenge) }}">
                                {{ $challenge->titulo }}

                                @if (isset($challenge->img))
                                    <div class="py-2">
                                        <img class="rounded shadow object-cover h-48 w-96"
                                            src="{{ asset('img_challenges/' . $challenge->img) }}" alt="">
                                            @endif
                                    </div>

                        </h2>
                        </a>
                    </div>
                @endguest

                @auth
                    <div class="flex justify-center">

                        <a class="rounded text-xs font-semibold uppercase focus:shadow-outline
                                mt-2 px-4 py-2 bg-blue-600 hover:bg-red-500 hover:text-gray-900 focus:bg-gray-200
                                focus:text-gray-900 focus:outline-none text-white
                                dark:bg-gray-700"
                            href="{{ route('challenges.show', $challenge) }}">
                            Ver detalles
                        </a>
                    </div>
                @endauth
                @guest
                    {{-- <div class="flex justify-center">

                        <a class="rounded text-xs font-semibold uppercase focus:shadow-outline
    mt-2 px-4 py-2 bg-blue-600 hover:bg-red-500 hover:text-gray-900 focus:bg-gray-200
    focus:text-gray-900 focus:outline-none text-white
    dark:bg-gray-700"
                            href="{{ route('login-guest') }}">
                            Ver detalles
                        </a>
                    </div> --}}

                @endguest

                {{-- @auth

                    <div class="flex justify-between bg">
                        <a class="bg-blue-600 inline-flex items-center text-xs font-semibold tracking-widest
                    text-center uppercase transition duration-150 ease-in-out dark:text-slate-400
                    text-white hover:text-black  rounded-lg px-2 dark:hover:text-slate-500 focus:outline-none
                    focus:border-slate-200"
                            href="{{ route('challenges.edit', $challenge) }}">Editar
                        </a>

                        <a class="bg-blue-600 inline-flex items-center text-xs font-semibold tracking-widest
                        text-center uppercase transition duration-150 ease-in-out dark:text-slate-400
                        text-white hover:text-black rounded-lg px-2 dark:hover:text-slate-500 focus:outline-none
                        focus:border-slate-200"
                            href="{{ route('registros') }}">Ver registros
                        </a>
                        {{-- Boton que bloquea --
                        <a class="bg-blue-600 inline-flex items-center text-xs font-semibold tracking-widest
                            text-center uppercase transition duration-150 ease-in-out dark:text-slate-400
                            text-white hover:text-black   rounded-lg px-2 dark:hover:text-slate-500 focus:outline-none
                            focus:border-slate-200"
                            href="{{ route('challenges.edit', $challenge) }}">Concluir
                        </a>

                        <form action="{{ route('challenges.destroy', $challenge) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button
                                class="bg-gray-700 rounded-lg inline-flex items-center text-xs font-semibold tracking-widest
                        text-center text-red-500 uppercase transition duration-150 ease-in-out
                        dark:text-red-500/80 hover:text-red-600 focus:outline-none"
                                type="submit">Eliminar
                            </button>
                        </form>
                    </div>
                @endauth --}}
            </div>
        @endforeach

    </main>
</x-layouts.app>
