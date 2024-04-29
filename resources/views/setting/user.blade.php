<x-app-layout>
    <x-slot name="header" class="m-5">
        <h1 class="mx-0   px-0 font-semibold text-xl dark:text-gray-500 leading-tight text-white">
            {{ __('users') }}
        </h1>
    </x-slot>
    <livewire:user-table />
</x-app-layout>
