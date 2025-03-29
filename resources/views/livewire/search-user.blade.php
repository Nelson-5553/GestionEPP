<div class="mt-6">
{{ $users->links() }}
<div class="flex flex-row mt-6  rounded-lg">
    <div class="overflow-hidden w-full overflow-x-auto rounded-xl border border-neutral-300 dark:border-neutral-700">
        <table wire:loading.table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300 animate-pulse">
            <thead class="border-b border-[#5A6ACF] bg-[#5A6ACF] text-sm text-white">
                <tr>
                    <th scope="col" class="p-4">ID</th>
                    <th scope="col" class="p-4">Nombre</th>
                    <th scope="col" class="p-4">Correo</th>
                    <th scope="col" class="p-4">Role</th>
                    <th scope="col" class="p-4">Revisar</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
                @for ($i = 0; $i < 5; $i++)
                    <tr class="animate-pulse">
                        <td class="p-4">
                            <div class="h-4 w-4 bg-gray-300 dark:bg-gray-700 rounded"></div>
                        </td>
                        <td class="p-4">
                            <div class="h-4 w-20 bg-gray-300 dark:bg-gray-700 rounded"></div>
                        </td>

                        <td class="p-4">
                            <div class="h-4 w-64 bg-gray-300 dark:bg-gray-700 rounded"></div>
                        </td>

                        <td class="p-4">
                            <div class="h-4 w-16 bg-gray-300 dark:bg-gray-700 rounded"></div>
                        </td>

                        <td class="p-4">
                            <div class="h-4 w-20 bg-gray-300 dark:bg-gray-700 rounded"></div>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
        <table wire:loading.remove class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300">
            <thead class="border-b border-[#5A6ACF] bg-[#5A6ACF] text-sm text-white">
                <tr>
                    <th scope="col" class="p-4">ID</th>
                    <th scope="col" class="p-4">Nombre</th>
                    <th scope="col" class="p-4">Correo</th>
                    <th scope="col" class="p-4">Role</th>
                    <th scope="col" class="p-4">Revisar</th>
                </tr>
            </thead>
            <tbody class="divide-y bg-[#ffffff] dark:bg-neutral-800  divide-neutral-300 dark:divide-neutral-700">
                @foreach ($users as $user)
                    <tr>

                        <td class="p-4">{{$user->id}}</td>
                        <td class="p-4"><span class="font-bold text-md">{{$user->name}}</span> <br> {{$user->card}}</td>
                        <td class="p-4">{{$user->email}}</td>
                        @foreach ($user->roles as $role)
                        <td class="p-4">{{$role->name}}</td>
                    @endforeach
                        <td class="p-4"><a  href="{{ route('user.show', $user)}}" class="whitespace-nowrap rounded-sm bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Revisar</a></td>
                    </tr>
                    @endforeach

            </tbody>
        </table>
    </div>
</div>
