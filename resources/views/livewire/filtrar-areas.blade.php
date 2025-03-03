<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-3">
    <div>
        <label class="block text-gray-900 dark:text-gray-200 font-semibold">Sede</label>
        <select wire:model.live="sede_id" class="w-full mt-1 p-2 border rounded-lg dark:bg-neutral-700 dark:text-gray-200">
            <option value="">Seleccione una sede</option>
            @foreach ($sedes as $sede)
                <option value="{{ $sede->id }}">{{ $sede->name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="block text-gray-900 dark:text-gray-200 font-semibold">Área</label>
        <select name="area_id" class="w-full mt-1 p-2 border rounded-lg dark:bg-neutral-700 dark:text-gray-200">
            <option value="">Seleccione un área</option>
            @foreach ($areas as $area)
                <option value="{{ $area->id }}">{{ $area->name }}</option>
            @endforeach
        </select>
    </div>
</div>
