<div class="space-y-4">
<label for="titulo" class="flex flex-col">
    <span class="font-serif text-slate-600 dark:text-slate-400">Título</span>
    <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400
    focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700
    focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="titulo" type="text" value="{{ old('titulo', $challenge->titulo) }}">
    @error('titulo')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
    @enderror
</label>

<label for="descripcion" class="flex flex-col">
    <span class="font-serif text-slate-600 dark:text-slate-400">Descripción</span>
    <textarea
        class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400
               focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700
               focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400"
        name="descripcion" id="descripcion" cols="30" rows="10">{{ old('descripcion', $challenge->descripcion) }}
    </textarea>
    @error('descripcion')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
    @enderror
</label>

    {{-- <label for="img" class="flex flex-col">
        <span class="font-serif text-slate-600 dark:text-slate-400">Sube una imagen</span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400
        focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700
        focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="img" type="file" value="{{ old('titulo', $challenge->titulo) }}">
        @error('img')
            <small class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
    </label> --}}

    {{-- Mejorar el frontend para una mejor UX --}}
    @if (isset($task) && $task == 'create' || $task == 'edit' )

    {{-- <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-50 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
        <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload </span> or drag and drop</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
        </div>
        <input name="img" id="dropzone-file" type="file" class="hidden" />
    </label> --}}

    <label class="flex flex-col">
        <span class="font-serif text-slate-600 mb-1 dark:text-slate-400">Imagen</span>
        <input type="file" name="img" class="block w-full text-sm text-slate-500
          file:mr-4 file:py-2 file:px-8
          file:rounded file:border-0
          file:text-sm file:font-semibold
          file:bg-violet-50 file:text-violet-700
          hover:file:bg-violet-200"/>
      </label>




    <label for="preview">
        <div class="img_preview">
            <img src="" alt="">
        </div>
    </label>
    @error('img')
    <small class="font-bold text-red-500/80">{{ $message }}</small>
@enderror
    @endif
</div>
