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
                <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                    <div class="flex flex-row justify-between py-6">
                        <div class="flex justify-start">
                            <x-jet-application-logo class="block w-auto h-12" />
                        </div>
                        <div class="flex justify-end">
                            <button type="button" class="block w-auto h-12 px-2 text-xs text-white bg-blue-500 rounded focus:outline-none hover:bg-indigo-500" onclick="toggleElement('addNav')">ADD WHITELIST</button>
                        </div>
                    </div>
                
                    @livewire('whitelist-table')
                </div>
                @endif
            </div>
        </div>
    </div>

    <div id="addNav" class="fixed inset-0 z-10 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <form method="POST" action="{{ route('whitelists.store') }}">
            @csrf
            <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
            <div class="w-full">
                <div class="py-2 mt-3 text-center sm:mt-0 sm:text-left">
                <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">
                    Create User Whitelist
                </h3>
                </div>        
                    <div>
                        <x-jet-label for="firstname" value="{{ __('First Name') }}" />
                        <x-jet-input id="firstname" class="block w-full mt-1" type="text" name="firstname" required autofocus autocomplete="firstname" />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="lastname" value="{{ __('Last Name') }}" />
                        <x-jet-input id="lastname" class="block w-full mt-1" type="text" name="lastname" required autofocus autocomplete="lastname" />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" required autofocus autocomplete="email" />
                    </div>
            </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
            <button type="submit" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-blue-500 border border-transparent rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                ADD WHITELIST
            </button>
            <button type="button" class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"  onclick="toggleElement('addNav')">
                Close
            </button>
            </div>
            </form>
        </div>
        </div>
    </div>

    <script>
        function toggleElement(collapseID)
        {
            document.getElementById(collapseID).classList.toggle('hidden');
            document.getElementById(collapseID).classList.toggle('block');
        }
    </script>
</x-app-layout>
