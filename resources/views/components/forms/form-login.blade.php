 <form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" method="POST"
        action="{{ route('login-user') }}">
        {{-- Directiva que añade el token CSRF para prevenir los ataques de este tipo,
         el tiempo de vida del token es de dos horas
    --}}
        @csrf

        <label for="email" class="flex flex-col">
            <span class="font-serif text-slate-600 dark:text-slate-400"> * Correo electrónico</span>
            <input
                class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400
        focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700
        focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:placeholder:text-slate-400"
                name="email" type="email" value="{{ old('email') }}">
            @error('email')
                <small class="font-bold text-red-500/80">{{ $message }}</small>
            @enderror
        </label>

        <label for="password" class="flex flex-col">
            <span class="font-serif text-slate-600 dark:text-slate-400"> * Contraseña</span>
            <input
                class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400
        focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700
        focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:placeholder:text-slate-400"
                name="password"
                type="password">
            @error('password')
                <small class="font-bold text-red-500/80">{{ $message }}</small>
            @enderror
                </label>

            <div class="flex items-center justify-between mt-4">
                <label for="remember" class="flex items-center">
                    <input
                        class="rounded-md shadow-sm border-slate-300 text-slate-600
                           focus:ring
                           focus:ring-slate-300
                           focus:ring-opacity-50
                           focus:border-slate-300
                           dark:bg-slate-900/80
                           dark:text-slate-400
                           dark:focus:ring-slate-800
                           dark:focus:border-slate-700
                           dark:bg-slate-800
                           dark:border-slate-900
                           dark:placeholder:text-slate-400"
                        name="remember" type="checkbox">
                    <span class="cursor-pointer ml-2 font-serif text-slate-600 dark:text-slate-400">
                        Recordar sesión
                    </span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                <a class="text-sm font-semibold border-2 border-transparent rounded
                        dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none"
                    href="{{ route('registro') }}">
                    Registrate aquí</span>
                </a>


                <button
                    class="items-center px-4 py-2 text-xs font-semibold tracking-widest
        text-center text-white uppercase transition duration-150 ease-in-out  border-2
        border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700
        focus:outline-none focus:border-sky-500"
                    type="submit">
                    Iniciar sesión
                </button>
            </div>
    </form>
