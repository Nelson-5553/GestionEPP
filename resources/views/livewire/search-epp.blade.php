
        <div class="grid grid-cols-1 gap-12 mt-8 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4">

            @foreach ( $epps as $epp )

            <div class="bg-white dark:bg-neutral-800 shadow-xl rounded-lg overflow-hidden">
                <img class="w-full h-56 object-cover object-center"
                src="{{ asset('storage/epp/' . $epp->image) }}" alt="avatar">
                    <div class="px-4 py-2">
                        <h1 class="text-2xl font-bold text-[#5A6ACF] dark:text-white">{{$epp->name}}</h1>
                        <p class="mt-1 text-[#5A6ACF] dark:text-white truncate">Cantidad: {{$epp->cantidad}}</p>
                        <div class="flex justify-end mt-1 space-x-3">
                            <a href="{{route('epp.show', $epp)}}"
                            class="text-green-500 hover:text-green-600">
                             <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" viewBox="0 0 24 24">
                                 <path fill="currentColor" d="M12 9a3 3 0 0 1 3 3a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3m0-4.5c5 0 9.27 3.11 11 7.5c-1.73 4.39-6 7.5-11 7.5S2.73 16.39 1 12c1.73-4.39 6-7.5 11-7.5M3.18 12a9.821 9.821 0 0 0 17.64 0a9.821 9.821 0 0 0-17.64 0"/>
                             </svg>
                         </a>

                         <a href="{{route('epp.edit', $epp)}}"
                         class="text-blue-500 hover:text-blue-600">
                         <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" viewBox="0 0 32 32"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m30 7l-5-5L5 22l-2 7l7-2Zm-9-1l5 5ZM5 22l5 5Z"/></svg>
                        </a>

                        <form action="{{ route('epp.destroy', $epp)}}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <x-delete-modal name="epp">
                                <h3 id="dangerModalTitle" class="mb-2 font-semibold tracking-wide text-neutral-900 dark:text-white">Eliminar Epp</h3>
                                <p>Estas a punto de eliminar esta epp  ¿estas seguro que la quieres eliminar?</p>
                            </x-delete-modal>
                        </form>
                    </div>
                </div>

                </div>
                @endforeach

        </div>
