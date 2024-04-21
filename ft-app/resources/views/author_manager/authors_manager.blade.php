<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Authors') }}
        </h2>
        <form method="get" action="{{ route('authors.creator') }}">
            @csrf
            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Create New') }}</x-primary-button>
            </div>
        </form>
        
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

                    <div class="user-row" style="min-height: 40px;">
                        <div class="user-data">NAME:</div>
                        <div class="user-data">Date OF BIRTH:</div>
                        <div class="user-data">PLACE OF LIVING</div>

                        <div class="user-data">ROLE</div>
                    </div>

                @foreach($authors as $author)
                    <div class="user-row">
                        <div class="user-data">{{ $author->name }}</div>
                        <div class="user-data">{{ $author->date_of_birth }}</div>
                        <div class="user-data">{{ $author->place_of_live }}</div>

                        <div class="user-data" >
                            <form method="get" action="{{ route('authors.detail') }}">
                                @csrf
                                <input type="hidden" name="au_id" value="{{ $author->id }}"/>
                                <div class="flex items-center gap-4">
                                    <x-primary-button>{{ __('Details') }}</x-primary-button>
                                </div>
                            </form>
                        </div>
                        <div class="user-data" >
                            <form method="get" action="{{ route('authors.edit') }}">
                                @csrf
                                <input type="hidden" name="au_id" value="{{ $author->id }}"/>
                                <div class="flex items-center gap-4">
                                    <x-primary-button>{{ __('Edit') }}</x-primary-button>
                                </div>
                            </form>
                        </div>
                        <div >
                            <form method="get" action="{{ route('authors.delete') }}">
                                @csrf
                                <input type="hidden" name="au_id" value="{{ $author->id }}"/>
                                <div class="flex items-center gap-4">
                                    <x-primary-button>{{ __('Delete') }}</x-primary-button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
