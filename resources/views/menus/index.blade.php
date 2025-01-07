<x-main-layout>
    <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl md:mb-6 border-b pb-2">{{ __('Menu') }}</h2>

    {{-- <x-alert /> --}}

    <div class="bg-white dark:bg-gray-800 relative border shadow-md sm:rounded-lg overflow-hidden">

        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
            <div class="w-full md:w-1/2">
                <form class="flex items-center">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                    </div>
                </form>
            </div>
            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                <x-link-button href="{{ route('menus.create') }}" >
                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Add menu
                </x-link-button>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">Name</th>
                        <th scope="col" class="px-4 py-3">Route</th>
                        <th scope="col" class="px-4 py-3">Icon</th>
                        <th scope="col" class="px-4 py-3">Parent menu</th>
                        <th scope="col" class="px-4 py-3">Permission</th>
                        <th scope="col" class="px-4 py-3">Order</th>
                        <th scope="col" class="px-4 py-3 flex items-center justify-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($menus as $key => $menu)
                    <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white uppercase">{{ $menu->name }}</th>
                        <td class="px-4 py-3">{{ $menu->route_name }}</td>
                        <td class="px-4 py-3">{{ $menu->icon }}</td>
                        <td class="px-4 py-3">{{ $menu->parent_id }}</td>
                        <td class="px-4 py-3">{{ $menu->permission_name }}</td>
                        <td class="px-4 py-3">{{ $menu->order }}</td>
                        <td class="px-4 py-3 flex items-center justify-end">
                            <x-link-button href="{{ route('menus.edit', $menu) }}" class="text-white bg-primary-500 hover:bg-primary-600 mx-2">Edit</x-link-button>
                            <form method="POST" class="inline-block" action="{{ route('menus.destroy', $menu) }}" onsubmit="return confirm('Are you sure?')">
                                @method('DELETE')
                                @csrf
                                <x-danger-button>Delete</x-danger-button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr class="odd:bg-white even:bg-gray-50  border-b ">
                        <td scope="row" colspan="4" class="px-6 py-4 text-center">
                            No data
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="my-2 mx-4 p-2">
            {{ $menus->links() }}
        </div>

    </div>
</x-main-layout>
