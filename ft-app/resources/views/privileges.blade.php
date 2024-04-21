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
                        <div class="user-data">ID:</div> 
                        <div class="user-data">NAME:</div>
                        <div class="user-data">ACCOUNT CREATED AT:</div>

                        <div class="user-data">ROLE</div>
                    </div>

                @foreach($users as $usr)
                    <div class="user-row">
                        <div class="user-data">{{ $usr->id }}</div> 
                        <div class="user-data">{{ $usr->name }}</div>
                        <div class="user-data">{{ $usr->created_at }}</div>

                        <form method="post" action="{{ route('privileges.update') }}">
                            @csrf
                            <select name="role">
                                <option value="user" {{ $usr->role == 1 ? 'selected' : '' }} >Standard User</option>
                                <option value="admin" {{ $usr->role == 4 ? 'selected' : '' }} >Admin</option>
                                <option value="root" {{ $usr->role == 6 ? 'selected' : '' }} >Root</option>
                            </select>
                            <input type="hidden" name="user_id" value="{{ $usr->id }}"/>
                            <button class="btn" type="submit">Apply Change</button>
                        </form>
                        
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
