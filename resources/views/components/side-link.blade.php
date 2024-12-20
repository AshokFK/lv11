<a
    {{ $attributes->merge(['class' => 'flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group']) }}>

    @isset($icon)
        {{ $icon }}
    @endisset

    <span class="flex-1 ml-3 whitespace-nowrap">{{ $slot }}</span>

    @isset($counter)
        <span
            class="inline-flex justify-center items-center w-5 h-5 text-xs font-semibold rounded-full text-primary-800 bg-primary-100 dark:bg-primary-200 dark:text-primary-800">
            {{ $counter }}
        </span>
    @endisset

</a>
