<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 dark:bg-gray-900 min-h-screen flex items-center justify-center">
        <div class="w-full max-w-4xl mx-auto px-4 lg:px-6">
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @include('profile.partials.create-post-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>