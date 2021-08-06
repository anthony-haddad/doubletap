<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('clients') }}" method="GET">
                <x-search placeholder="Enter client name..." term="{{ $search }}" />
                <input type="submit" hidden value="search">
            </form>
            <table class="w-full border border-solid rounded-md">
                <thead>
                    <tr class="bg-gray-700 text-white">
                        <th class="p-2">First Name</th>
                        <th class="p-2">Last Name</th>
                        <th class="p-2">Phone</th>
                        <th class="p-2">Email</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($clients as $client)
                        <tr>
                            <td class="p-2">{{ $client->first_name }}</td>
                            <td class="p-2">{{ $client->last_name }}</td>
                            <td class="p-2">{{ $client->phone }}</td>
                            <td class="p-2">{{ $client->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-2">{{ $clients->links() }}</div>
        </div>
    </div>
</x-app-layout>