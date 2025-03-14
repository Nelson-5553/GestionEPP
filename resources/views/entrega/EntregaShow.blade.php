<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">

        @php
    $colores = [
        'Pendiente' => 'border-yellow-500 text-yellow-500 bg-yellow-500/10',
        'Entregado' => 'border-green-500 text-green-500 bg-green-500/10',
        'Cancelado' => 'border-red-500 text-red-500 bg-red-500/10',
    ];
    $clase = $colores[$entrega->state] ?? 'border-gray-500 text-gray-500 bg-gray-500/10';
@endphp

<div class="flex flex-col sm:flex-row sm:justify-between bg-[#f9f9fa] dark:bg-neutral-800 border-2 border-gray-300 dark:border-gray-600 w-full rounded-t-lg p-3 sm:p-4 mt-6 sm:mt-8">
    <h1 class="text-lg sm:text-xl font-bold text-gray-900 dark:text-gray-200">Información de Entrega</h1>
    <span class="w-fit inline-flex overflow-hidden rounded-full border bg-white text-xs sm:text-sm font-medium dark:bg-neutral-950 {{ $clase }}">
        <span class="px-2 py-1 sm:px-3 sm:py-2">{{ ucfirst($entrega->state) }}</span>
    </span>
</div>


      <div class=" bg-[#f9f9fa] dark:bg-neutral-800 border border-gray-300 dark:border-gray-600 px-7 rounded-b-lg">
          <br>
         <div class="grid grid-cols-1 md:grid-cols-2  gap-8">
<!-- Informacion de usuario -->
<div class="flex flex-col text-gray-900 dark:text-gray-200 space-y-4">
  <div class="flex flex-row items-center space-x-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-[#5A67BA]">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
    </svg>
    <p class="font-semibold text-sm md:text-base">INFORMACIÓN DE USUARIO:</p>
  </div>
  <div class="bg-slate-300/50 dark:bg-slate-600/50 rounded-lg p-4">
    <label class="text-gray-900 dark:text-gray-400 text-xs">Nombre</label>
    <p class="text-sm">{{$entrega->solicitud->user->name}}</p>
    <label class="text-gray-900 dark:text-gray-400 text-xs">Identificación</label>
    <p class="text-sm">{{$entrega->solicitud->user->card}}</p>
  </div>
</div>

<!-- Ubicación -->
<div class="flex flex-col text-gray-900 dark:text-gray-200 space-y-4">
  <div class="flex flex-row items-center space-x-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-[#5A67BA]">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
    </svg>
    <p class="font-semibold text-sm md:text-base">UBICACIÓN:</p>
  </div>
  <div class="bg-slate-300/50 dark:bg-slate-600/50 rounded-lg p-4">
    <label class="text-gray-900 dark:text-gray-400 text-xs">Sede</label>
    <p class="text-sm">{{ $entrega->solicitud->sede->name ?? 'No especificado' }}</p>
    <label class="text-gray-900 dark:text-gray-400 text-xs">Área</label>
    <p class="text-sm">{{ $entrega->solicitud->area->name ?? 'No especificado' }}</p>
  </div>
</div>

<!-- Elemento de Protección Personal -->
<div class="flex flex-col text-gray-900 dark:text-gray-200 space-y-4">
  <div class="flex flex-row items-center space-x-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-[#5A67BA]">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
    </svg>
    <p class="font-semibold text-sm md:text-base">ELEMENTO DE PROTECCIÓN PERSONAL:</p>
  </div>
  <div class="flex flex-row bg-slate-300/50 dark:bg-slate-600/50 rounded-lg p-4 space-x-4">
    <div>
      <label class="text-gray-900 dark:text-gray-400 text-xs">Tipo</label>
      <p class="text-sm">{{ $entrega->solicitud->epp->name ?? 'No hay EPP disponible' }}</p>
    </div>
    <div>
      <label class="text-gray-900 dark:text-gray-400 text-xs">Cantidad</label>
      <p class="text-sm">{{ $entrega->solicitud->cantidad ?? 'No hay Cantidad disponible' }}</p>
    </div>
  </div>
</div>

<!-- Turnos -->
<div class="flex flex-col text-gray-900 dark:text-gray-200 space-y-4">
  <div class="flex flex-row items-center space-x-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-[#5A67BA]">
      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
    </svg>

    <p class="font-semibold text-sm md:text-base">TURNOS:</p>
</div>
<div class="flex flex-row bg-slate-300/50 dark:bg-slate-600/50 rounded-lg p-4 space-x-4">
    <div>
        <label class="text-gray-900 dark:text-gray-400 text-xs">Inicio de turno</label>
        <p class="text-sm">{{$entrega->start_time_labor ?? 'informacion no disponible'}}</p>
    </div>
    <div>
        <label class="text-gray-900 dark:text-gray-400 text-xs">Fin de turno</label>
        <p class="text-sm">{{ $entrega->end_time_labor ?? 'informacion no disponible'}}</p>
    </div>
</div>
</div>

<!-- Observaciones (ocupa toda la fila en pantallas grandes) -->
<div class="flex flex-col text-gray-900 dark:text-gray-200 col-span-1 md:col-span-2">
    <div class="flex flex-row items-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-[#5A67BA]">
            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
        </svg>
        <p class="font-semibold text-sm md:text-base">OBSERVACIONES:</p>
    </div>
    <div class="bg-slate-300/50 dark:bg-slate-600/50 rounded-lg p-4 mt-4">
        <p class="text-sm">{{ $entrega->observations ?? 'No hay descripción disponible' }}</p>
    </div>
</div>
</div>
@if ($entrega->state === 'Entregado')
<br>
<h1 class="text-xl font-bold text-gray-900 dark:text-gray-200">Entrega confirmada</h1>
<br>
@else
<br>
          <h1 class="text-xl font-bold text-gray-900 dark:text-gray-200">Confirmar entrega</h1>
          <br>
          <x-error-menssage />

  <form action="{{route('entrega.update', $entrega)}}" method="POST">
    @csrf
    @method('PATCH')

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-3">
          <div>
              <label class="block text-gray-900 dark:text-gray-200 font-semibold">Inicio de turno</label>
              <input name="start_time_labor" type="time" class="w-full mt-1 p-2 border rounded-lg dark:bg-neutral-700 dark:text-gray-200"/>

          </div>
          <div>
              <label class="block text-gray-900 dark:text-gray-200 font-semibold">Fin de turno</label>
              <input name="end_time_labor" type="time" class="w-full mt-1 p-2 border rounded-lg dark:bg-neutral-700 dark:text-gray-200"/>
          </div>
          <div class="col-span-2">
              <label class="block text-gray-900 dark:text-gray-200 font-semibold">Observación</label>
              <textarea name="observations" class="w-full mt-1 p-2 border rounded-lg dark:bg-neutral-700 dark:text-gray-200" rows="4" placeholder="Colocar alguna observacion del Epp (Opcional)"></textarea>
          </div>
          <span></span>
          <div>
              <button type="submit" class="flex flex-row justify-center w-full mt-1 py-2 px-6 border rounded-lg bg-blue-600 text-white hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 gap-2.5">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
Entregar EPP
              </button>
          </div>
      </form>
  </div>

@endif

          <div class="flex justify-end mt-6 gap-4">

          </div>
      </div>
  </div>
</x-app-layout>
