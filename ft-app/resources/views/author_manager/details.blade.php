<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Author's Details") }}
        </h2>
    </x-slot>

    <style>

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
                <div>
                    ID: {{ $au->id }}
                </div>
                <div>
                    NAME: {{ $au->name }}
                </div>
                <div>
                    DATE OF BIRTH: {{ $au->date_of_birth }}
                </div>
                <div>
                    PLACE OF LIVE: {{ $au->place_of_live }}
                </div>
                <div>
                    BIOGRAPHY: {{ $au->biography }}
                </div>

                <div class="user-data" >
                            <form method="get" action="{{ route('authors.edit') }}">
                                @csrf
                                <input type="hidden" name="au_id" value="{{ $au->id }}"/>
                                <div class="flex items-center gap-4">
                                    <x-primary-button>{{ __('Edit') }}</x-primary-button>
                                </div>
                            </form>
                        </div>
                        <div >
                            <form method="get" action="{{ route('authors.delete') }}">
                                @csrf
                                <input type="hidden" name="au_id" value="{{ $au->id }}"/>
                                <div class="flex items-center gap-4">
                                    <x-primary-button>{{ __('Delete') }}</x-primary-button>
                                </div>
                            </form>
                        </div>
                        <div>
                            <form method="get" action="{{ route('authors.index') }}">
                                @csrf
                                <input type="hidden" name="au_id" value="{{ $au->id }}"/>
                                <div class="flex items-center gap-4">
                                    <x-primary-button>{{ __('Back') }}</x-primary-button>
                                </div>
                            </form>
                        </div>

            </div>
        </div>
    </div>
</x-app-layout>
