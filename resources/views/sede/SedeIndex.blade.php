<x-app-layout>
    <div class=" max-w-7xl mx-auto py-12 sm:px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 -ml-7">
            Gestion Salud Sedes
        </p>
        <div class="flex flex-row justify-between items-center w-auto h-24 mt-8 p-5 bg-[#F1F2F7] dark:bg-neutral-800 rounded-md">
            <x-search-input/>
            <x-register-modal name=sede>
            <h3 id="infoModalTitle" class="mb-2 font-semibold tracking-wide text-neutral-900 dark:text-white">New Update Available</h3>
            <p>A new version of the application is ready for download. Enhance your experience with the latest features and improvements.</p>
        </x-register-modal>
        </div>
    </div>
</x-app-layout>

