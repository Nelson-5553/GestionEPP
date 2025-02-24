<x-app-layout>
    <div class=" max-w-7xl mx-auto py-12 sm:px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 -ml-7">
            Gestion Salud Sedes
        </p>
        <div
            class="flex flex-row justify-between items-center w-auto h-24 mt-8 p-5 bg-[#F1F2F7] dark:bg-neutral-800 rounded-md">
            <x-search-input />
            <x-register-modal name=sede>
                <form action="{{ route('sede.store') }}" method="POST" enctype="multipart/form-data" class="p-6 w-96">
                    @csrf
                    <label class="block text-gray-700 text-left font-medium">Nombre de Sede</label>
                    <input type="text" name="name"
                        class="w-full p-2 border border-gray-300 rounded-md mb-3 focus:outline-none focus:ring-2 focus:ring-purple-500">

                    <label class="block text-gray-700 text-left font-medium">Dirección</label>
                    <input type="text" name="direction"
                        class="w-full p-2 border border-gray-300 rounded-md mb-3 focus:outline-none focus:ring-2 focus:ring-purple-500">

                    <label class="block text-gray-700 text-left font-medium">Descripción</label>
                    <textarea name="description"
                        class="w-full h-32 p-2 border border-gray-300 rounded-md mb-3 focus:outline-none focus:ring-2 focus:ring-purple-500"></textarea>

                    <div class="mb-3">
                        <!-- Input oculto -->
                        <input type="file" id="fileUpload" name="image" accept="image/*" class="hidden">

                        <!-- Botón para activar el input -->
                        <label for="fileUpload"
                            class="cursor-pointer bg-sky-600 text-white px-4 py-2 rounded-md hover:bg-sky-700">
                            ⬆️ Subir foto
                        </label>
                    </div>
                    <div class="flex items-center justify-center border-neutral-300 p-4 dark:border-neutral-700">
                        <button type="submit"
                            class="w-full whitespace-nowrap rounded-md border border-sky-500 bg-sky-500 px-4 py-2 text-center text-sm font-semibold tracking-wide text-white transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-500 active:opacity-100 active:outline-offset-0">Registrar</button>
                    </div>
                </form>
            </x-register-modal>
        </div>
        @if (session('success'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    </div>
</x-app-layout>
