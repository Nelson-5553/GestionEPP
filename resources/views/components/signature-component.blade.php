<div>
    <div class="flex flex-col items-center justify-center p-4">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <!-- User ID Hidden Field -->
      <input type="hidden" name="user_id" value="{{ Auth::id() }}">

      <!-- Controles -->
      <div class="mb-4 flex flex-col items-center gap-4 rounded-2xl bg-white p-3 shadow-xl md:flex-row">
        <div class="flex items-center gap-4">
          <button id="pencil" class="flex items-center gap-3 rounded-md bg-gray-200 px-4 py-2 font-semibold hover:bg-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 0 0-5.78 1.128 2.25 2.25 0 0 1-2.4 2.245 4.5 4.5 0 0 0 8.4-2.245c0-.399-.078-.78-.22-1.128Zm0 0a15.998 15.998 0 0 0 3.388-1.62m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m3.42 3.42a15.995 15.995 0 0 0 4.764-4.648l3.876-5.814a1.151 1.151 0 0 0-1.597-1.597L14.146 6.32a15.996 15.996 0 0 0-4.649 4.763m3.42 3.42a6.776 6.776 0 0 0-3.42-3.42" />
            </svg>
            Pincel
          </button>
          <input type="color" id="color" value="#000000" class="h-10 w-10" />
        </div>

        <span class="text-lg font-semibold">Tamaño:</span>
        <input type="range" id="size"
          class="w-40 h-2 bg-gray-300 rounded-lg appearance-none cursor-pointer accent-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400"
          min="1" max="30" value="3"/>

        <div class="flex items-center gap-4">
          <button id="clear" class="rounded bg-white px-4 py-2 font-semibold text-black shadow-sm hover:bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
            </svg>
          </button>
          <button id="save" class="rounded bg-white px-4 py-2 font-semibold text-black shadow-sm hover:bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
            </svg>
          </button>
          <button id="undo" class="hidden">Deshacer</button>
          <button id="redo" class="hidden">Rehacer</button>
        </div>
      </div>

      <!-- Canvas -->
      <div class="w-full max-w-[600px] mx-auto">
        <canvas id="canvas" class="w-full h-auto rounded-xl border-2 border-gray-200 bg-white"></canvas>
      </div>

      <button type="button" class="whitespace-nowrap rounded-sm bg-sky-500 border border-sky-500 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-sky-500 dark:border-sky-500 dark:text-white dark:focus-visible:outline-sky-500 mt-5">
        Guardar firma
      </button>
    </div>
  </div>
