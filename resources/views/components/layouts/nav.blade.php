 {{-- <nav
     class="w-screen overflow-scroll bg-white border-b white:bg-slate-900 border-slate-900/10 lg:px-8 white:border-slate-300/10 lg:mx-0">
     <div class="px-4 mx-auto max-w-7xl sm:px-16 lg:px-20">
         <div class="relative flex items-center justify-between h-16">
             <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
                 <div class="flex items-center flex-shrink-0">

                 </div>
                 <div class="mx-auto">
                     <div class="flex space-x-4">
                         <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                         <a
                             class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('inicio') ? 'text-sky-600 dark:text-dark' : 'text-black' }}">
                             Inicio
                         </a>
                         <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                         <a
                             class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('challenges.*') ? 'text-sky-600 dark:text-dark' : 'text-black' }}">
                             Challenges
                         </a>
                         <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-black' -->
                         <a
                             class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('conocenos') ? 'text-sky-600 dark:text-dark' : 'text-black' }}">
                             Conócenos
                         </a>
                         <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-black' -->
                         <a
                             class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('contacto') ? 'text-sky-600 dark:text-dark' : 'text-black' }}">
                             Contacto
                         </a>
                     </div>
                 </div>

                 @guest
                     <div class="ml-auto">
                         <div class="flex space-x-4">
                             <a href="{{ route('registro') }}"
                                 class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('registro') ? 'text-sky-600 dark:text-dark' : 'text-black' }}">
                                 Registrarse
                             </a>
                             <a href="{{ route('login') }}"
                                 class="bg-blue-800 lg:px-3 py-2 text-sm font-medium rounded-md hover:text-white dark:hover:text-dark {{ request()->routeIs('login') ? 'text-white dark:text-dark' : ' text-black' }}">
                                 Iniciar sesión
                             </a>
                         </div>
                     </div>
                 @endguest
                 @auth
                     <form action="{{ route('logout') }}" method="POST">
                         @csrf
                         <button>Cerrar sesión</button>
                     </form>
                 @endauth


             </div>
         </div>
     </div>
 </nav> --}}



 {{-- Navbar responsive --}}
 <div class="sticky top-0 w-full bg-gray-800 text-gray-200 rounded-lg">
     <div x-data="{ open: false }"
         class="mx-auto flex max-w-screen-xl flex-col px-4 md:flex-row md:items-center md:justify-between md:px-6 lg:px-8">
         <div class="flex flex-row items-center justify-between p-3">

             <a href="{{ route('inicio') }}">
                 <img class="md:mr-20" src="{{ asset('logos/logo3_32x32.png') }}" alt=""></a>
                 {{-- Burguer button --}}
             <button class="focus:shadow-outline rounded-lg focus:outline-none md:hidden" @click="open = !open">
                 <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                     <path x-show="!open" fill-rule="evenodd"
                         d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                         clip-rule="evenodd"></path>
                     <path x-show="open" fill-rule="evenodd"
                         d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                         clip-rule="evenodd"></path>
                 </svg>
             </button>
         </div>

         <nav :class="{ 'flex': open, 'hidden': !open }"
             class="hidden flex-grow flex-col pb-4 md:flex md:flex-row md:justify-end md:pb-0">
             <a class="focus:shadow-outline mt-2 rounded-lg px-4 py-2 text-sm font-semibold hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0 md:ml-12 {{ request()->routeIs('inicio') ? 'bg-gray-700' : '' }}"
                 href="{{ route('inicio') }}">Inicio</a>
             <a class="focus:shadow-outline mt-2 rounded-lg px-4 py-2 text-sm font-semibold hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0 md:ml-4 {{ request()->routeIs('challenges.*') ? 'bg-gray-700' : '' }}"
                 href="{{ route('challenges.index') }}">Challenges</a>
             <a class="focus:shadow-outline mt-2 rounded-lg px-4 py-2 text-sm font-semibold hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0 md:ml-4 {{ request()->routeIs('conocenos') ? 'bg-gray-700' : '' }}"
                 href="{{ route('conocenos') }}">Sobre nosotros</a>
             <a class="focus:shadow-outline mt-2 rounded-lg px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0 md:ml-4 {{ request()->routeIs('contacto') ? 'bg-gray-700' : '' }}"
                 href="{{ route('contacto') }}">Contacto</a>

             {{-- Botones de sesión y registro --}}

             @guest
                 <div class="ml-auto">
                     <div class="flex space-x-4">
                         {{-- <a href="{{ route('registro') }}"
                             class="px-4 py-2 text-sm font-medium rounded-md hover:bg-gray-200  hover:text-sky-600 dark:hover:text-dark focus:outline-none {{ request()->routeIs('registro') ? 'dark:text-dark bg-gray-700' : 'text-white' }}">
                             Registrarme
                         </a> --}}
                         <a href="{{ route('login-user') }}"
                             class="hover:bg-lime-600 px-4 py-2 text-sm font-medium rounded-md dark:hover:text-dark {{ request()->routeIs('login-user') ? 'text-white dark:text-dark bg-lime-900' : 'bg-lime-600 text-white' }}">
                             Acceder
                         </a>
                     </div>
                 </div>
             @endguest
             @auth
                 <div class="ml-auto">
                     <div class="flex space-x-4">

                         <form action="{{ route('logout-user') }}" method="POST">
                             @csrf
                             <button class="hover:bg-red-900 bg-red-800 rounded-md text-sm px-4 py-2 text-white font-medium" > Cerrar sesión</button>
                         </form>
                     </div>
                 </div>

             @endauth

             {{--  Dropdown --}}
             {{-- <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="focus:shadow-outline mt-2 flex w-full flex-row items-center rounded-lg px-4 py-2 text-left text-sm font-semibold hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0 md:ml-4 md:inline md:w-auto">
                        <span>Dropdown</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                            class="mt-1 ml-1 inline h-4 w-4 transform transition-transform duration-200 md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 mt-2 w-full origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="rounded-md bg-gray-800 px-2 py-2 shadow">
                            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0"
                                href="#">Link #1</a>
                            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0"
                                href="#">Link #2</a>
                            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0"
                                href="#">Link #3</a>
                            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-200 hover:bg-gray-200 hover:text-gray-900 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0"
                                href="https://laraveltuts.com">TechChallenge</a>
                        </div>
                    </div>
                </div> --}}

         </nav>
     </div>
 </div>
