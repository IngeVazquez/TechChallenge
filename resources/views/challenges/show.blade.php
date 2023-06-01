<x-layouts.app :title="$challenge->titulo" {{-- Lo ideal es agrgarle otro campo y darle un tratamiento especial para posicionamiento --}} :meta-Description="$challenge->descripcion">

    <div class="my-4 justify-center flex text-dark">
        <a class="mt-1 rounded-full bg-red-100 p-1 dark:text-white dark:bg-slate-800" href={{ route('challenges.index') }}>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                stroke="currentColor" class="w-6 h-6">
                <path strokeLinecap="round" strokeLinejoin="round"
                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
            </svg>
        </a>
        <h1 class="ml-8 font-sans text-3xl text-center text-sky-600 dark:text-sky-500">{{ $challenge->titulo }}
        </h1>
    </div>
    <div class="flex flex-col max-w-xl px-6 py-4 mx-auto bg-white rounded-lg shadow mb-4 dark:bg-slate-800">

        <div class="max-w-xl mt-4 mx-auto bg-cyan-200  dark:bg-cyan-800 rounded-lg shadow mb-4">
            <p class="px-4 py-2 flex-1 leading-normal text-black dark:text-slate-100">{{ $challenge->descripcion }}
            </p>
        </div>
        @if (isset($challenge->img))
            <div class="">
                <img class="mx-auto rounded-lg mb-6" src="{{ asset('img_challenges/' . $challenge->img) }}"
                    alt="">
            </div>
        @endif

        <form action="{{ route('new.register', $challenge) }}" method="POST">
            @csrf
            <div class="flex justify-center">
            <button
                class="rounded text-xs font-semibold uppercase focus:shadow-outline
        mt-2 px-4 py-2 bg-blue-600 hover:bg-red-500 hover:text-gray-900 focus:bg-gray-200
        focus:text-gray-900 focus:outline-none text-white
        dark:bg-gray-700"
                type="submit">
                Aceptar reto
            </button>
            <div class="flex justify-center">
        </form>

            {{-- <div class="flex justify-center">

                <a class="rounded text-xs font-semibold uppercase focus:shadow-outline
                        mt-2 px-4 py-2 bg-blue-600 hover:bg-red-500 hover:text-gray-900 focus:bg-gray-200
                        focus:text-gray-900 focus:outline-none text-white
                        dark:bg-gray-700"
                    href="{{ route('new.register', $challenge) }}">
                    Aceptar reto
                </a>
            </div> --}}


        {{-- <a class="flex justify-center ml-16 hover:bg-gray-200 dark:text-white " href="/challenges/{{$challenge->id+1}}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                stroke="currentColor" class="slate-50 h-8 w-8">
                <path strokeLinecap="round" strokeLinejoin="round"
                    d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </a> --}}

    </div>


</x-layouts.app>

{{--
<a class="relative block rounded-full bg-primary-100 py-1.5 px-3 text-sm font-medium text-primary-700 transition-all duration-300"
                        href="{{ url("/challenges/2") }}">2
                        <span
                            class="absolute -m-px h-px w-px overflow-hidden whitespace-nowrap border-0 p-0 [clip:rect(0,0,0,0)]">(current)</span>
                    </a> --}}
