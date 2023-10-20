<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('Admin.reservations.create') }}"
                    class="px-4 py-2 bg-indigo-400 hover:bg-indigo-700 rounded-lg text-white">New Reservations</a>
            </div>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs uppercase bg-gray-800 dark:bg-gray-700 dark:text-gray-400 text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Time
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Table
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Guest
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Opsi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $key => $reservation)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $key + 1 }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $reservation->first_name }} {{ $reservation->last_name }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $reservation->email }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $reservation->reservation_date }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $reservation->reservation_time }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $reservation->table->name }} ( {{ $reservation->table->location }} )
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $reservation->guestNumber }}
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('Admin.reservations.edit', $reservation->id) }}"
                                            class="btn btn-sm btn-warning bg-slate-400 border-amber-100"><i
                                                class="bi bi-gear"></i></a>
                                        <form method="POST"
                                            action="{{ route('Admin.reservations.destroy', $reservation->id) }}"
                                            onsubmit="return confirm('Yakin Delete')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-sm btn-danger  bg-slate-900 border-amber-100"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
