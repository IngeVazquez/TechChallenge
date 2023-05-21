    <div class="flex justify-center">
        <form action="{{ route('new-register') }}" method="POST">
            @csrf

            <input name="id" id="id" type="text" value="{{ auth()->id() }}">
            <input name="id" id="id" type="text" value="{{}}">



            <button
                class="rounded text-xs font-semibold uppercase focus:shadow-outline
        mt-2 px-4 py-2 bg-blue-600 hover:bg-red-500 hover:text-gray-900 focus:bg-gray-200
        focus:text-gray-900 focus:outline-none text-white
        dark:bg-gray-700"
                type="submit">
                Aceptar reto
            </button>
        </form>
    </div>


