<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Fairytales') }}
        </h2>
        <form method="get" action="{{ route('fairytale.creator') }}">
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
                        <div class="user-data">TITLE:</div>
                        <div class="user-data">AUTHOR:</div>
                        <div class="user-data">CREATED AT:</div>
                    </div>

                @foreach($fr as $f)
                    <div class="user-row">
                        <div class="user-data">{{ $f->title }}</div>
                        <div class="user-data">{{ $f->id_author }}</div>
                        <div class="user-data">{{ $author->created_at }}</div>

                        <div class="user-data" >
                            <form method="get" action="{{ route('do it!') }}">
                                @csrf
                                <input type="hidden" name="au_id" value="{{ $author->id }}"/>
                                <div class="flex items-center gap-4">
                                    <x-primary-button>{{ __('Open') }}</x-primary-button>
                                </div>
                            </form>
                        </div>
                        <div class="user-data" >
                            <form method="get" action="{{ route('fairytale.edit') }}">
                                @csrf
                                <input type="hidden" name="au_id" value="{{ $author->id }}"/>
                                <div class="flex items-center gap-4">
                                    <x-primary-button>{{ __('Edit') }}</x-primary-button>
                                </div>
                            </form>
                        </div>
                        <div>
                            <form method="get" action="{{ route('fairytale.delete') }}">
                                @csrf
                                <input type="hidden" name="au_id" value="{{ $f->id }}"/>
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
