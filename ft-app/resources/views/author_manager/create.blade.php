<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Author') }}
        </h2>
    </x-slot>

    <style>
        .user-data {
            float:left;
            padding: 5px;
            margin-right: 20px;
        }
        .user-row {
            background-color: #ddd;
            border-radius: 7px;
            margin: 6px;
            padding: 5px;
        }
        .btn {
            background-color: #ccc;
            padding: 10px;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #eee;
        }

    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="padding: 15px">
            <div style="max-width: 40%;">
            <form method="post" action="{{ route('authors.create') }}" class="mt-6 space-y-6">
                @csrf

                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <div>
                    <x-input-label for="birth" :value="__('Date Of Birth')" />
                    <x-text-input id="birth" name="birth" type="date" class="mt-1 block w-full" required />
                    <x-input-error class="mt-2" :messages="$errors->get('birth')" />

                </div>

                <div>
                    <x-input-label for="place" :value="__('Place Of Live')" />
                    <x-text-input id="place" name="place" type="text" class="mt-1 block w-full" required />
                    <x-input-error class="mt-2" :messages="$errors->get('place')" />

                </div>
                <div>
                    <x-input-label for="bio" :value="__('Biography (Optional)')" />
                    <textarea cols="55" rows="8" name="bio" id="bio">
                        
                    </textarea>
                </div>
                

                <div class="flex items-center gap-4">
                    <x-primary-button style="margin-top: 10px;">{{ __('Create') }}</x-primary-button>

                </div>
                
            </form>

            </div>
            </div>
        </div>
    </div>
</x-app-layout>
