<x-main-layout>
    <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl md:mb-6 border-b pb-2">{{ __('Users') }}</h2>

    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-4">Name</th>
                        <th class="px-6 py-4">Email</th>
                        <th class="px-6 py-4">Created</th>
                        <th class="px-6 py-4">Updated</th>
                        <th class="px-6 py-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)

                    <tr class="odd:bg-white even:bg-gray-50 border-b hover:bg-slate-200">
                        <th scope="row" class="whitespace-nowrap px-6 py-4">{{ $user->name }}</th>
                        <td scope="row" class="px-6 py-4">
                            {{ $user->email }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="ps-3">
                                <div class="whitespace-nowrap font-normal text-gray-500">{{ $user->created_at }}</div>
                                <div class="text-base font-semibold">{{ $user->createdBy?->name }}</div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="ps-3">
                                <div class="whitespace-nowrap font-normal text-gray-500">{{ $user->updated_at }}</div>
                                <div class="text-base font-semibold">{{ $user->updatedBy?->name }}</div>
                            </div>
                        </td>

                        <td class="px-6 py-4">
                            <form method="POST" class="inline-block" action="{{ route('users.destroy', $user) }}" onsubmit="return confirm('Are you sure?')">
                                @method('DELETE')
                                @csrf
                                <x-danger-button>Delete</x-danger-button>
                            </form>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
            <div class="my-2 mx-4 p-2">
                {{ $users->links() }}
            </div>
        </div>
    </div>

</x-main-layout>
