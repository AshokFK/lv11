<x-main-layout>
    <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl md:mb-6 border-b pb-2">Create menu</h2>

    <form action="{{ route('menus.store') }}" method="post" class="bg-white dark:bg-gray-800 relative border shadow-md sm:rounded-lg p-4">
        @csrf
        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mb-4">
            <div class="sm:col-span-2">
                <x-input-label for="name" :value="__('Menu name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" placeholder="type menu name" :value="old('name')" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
            <div class="sm:col-span-2">
                <x-input-label for="route_name" :value="__('Route')" />
                <x-text-input id="route_name" name="route_name" type="text" class="mt-1 block w-full" placeholder="route url" :value="old('route_name')" />
                <x-input-error class="mt-2" :messages="$errors->get('route_name')" />
            </div>
            <div class="sm:col-span-2">
                <x-input-label for="icon" :value="__('Icon')" />
                <textarea id="icon" rows="3" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="svg icon">{{ old('icon') }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('icon')" />
            </div>
            <div class="sm:col-span-2">
                <x-input-label for="parent_id" :value="__('Parent menu')" />
                <select id="parent_id" name="parent_id" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected>Select parent menu</option>
                    @foreach($parentMenus as $key => $menu)
                    <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('parent_id')" />
            </div>
            <div class="sm:col-span-2">
                <x-input-label for="permission_name" :value="__('Permission name')" />
                <x-text-input id="permission_name" name="permission_name" type="text" class="mt-1 block w-full" placeholder="required permission to acces this menu" :value="old('permission_name')" />
                <x-input-error class="mt-2" :messages="$errors->get('permission_name')" />
            </div>
            <div class="sm:col-span-2">
                <x-input-label for="order" :value="__('Order')" />
                <x-text-input id="order" name="order" type="number" min="0" class="mt-1 block w-full" placeholder="order by the menu" :value="old('order', 0)" />
                <x-input-error class="mt-2" :messages="$errors->get('order')" />
            </div>

        </div>
        <div class="flex space-x-2">
            <x-primary-button>Save</x-primary-button>
            <x-link-button class="inline-flex items-center" href="{{ route('menus.index') }}">Cancel</x-link-button>
        </div>
    </form>
</x-main-layout>
