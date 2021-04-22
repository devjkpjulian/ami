<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-blue-400">
            {{ __('HOME') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                @if(auth()->user()->admin == true && !is_null(auth()->user()->email_verified_at))
                    <x-jet-welcome />
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
