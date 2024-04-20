<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Privileges') }}
        </h2>
    </x-slot>

    <style>
        .user-data {
            float:left;
            padding: 5px;
            margin-right: 20px;
        }
        .user-row {
            clear: both;
            padding: 5px;
            border: 2px solid black;
            min-height: 51px;
        }

    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="padding: 15px">
                @foreach($users as $usr)
                    <div class="user-row">
                        <div class="user-data">{{ $usr->id }}</div> 
                        <div class="user-data">{{ $usr->name }}</div>
                        <div class="user-data">{{ $usr->created_at }}</div>

                        <form method="post" action="{{ route('privileges.update') }}">
                            @csrf
                            @method('patch')
                            <select name="role">
                                <option value="user" {{ $usr->role == 1 ? 'selected' : '' }} >Standard User</option>
                                <option value="admin" {{ $usr->role == 4 ? 'selected' : '' }} >Admin</option>
                                <option value="root" {{ $usr->role == 6 ? 'selected' : '' }} >Root</option>
                            </select>
                            <input type="hidden" name="user-id" value="{{ $usr->id }}"/>
                            <button type="submit">Apply Change</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
