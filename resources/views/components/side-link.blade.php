@props(['active'])

@php
$classes = ($active ?? false)
? 'flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white bg-primary-50 hover:bg-primary-100 dark:hover:bg-primary-700 group'
: 'flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group';
@endphp

<a
    {{ $attributes->merge(['class' => $classes]) }}>

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
