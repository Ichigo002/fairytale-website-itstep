<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class PrivilegeController extends Controller
{
    public function index() {

        $users = User::select('id', 'name', 'created_at', 'role')->get();

        return view('privileges', ['users' => $users]);
    }

    public function update(Request $request) {
        $v = $request->role;
        $role = 1;

        switch($v)
        {
            case 'user':
                $role = 1;
                break;
            case 'admin':
                $role = 4;
                break;
            case 'root':
                $role = 6;
                break;
            default:
                abort(400, 'Incorrect value passed by form.');
        }


        $user = User::find($request->user_id);

        $user->update([
            'role' => $role,
        ]);

        return redirect('privileges');
    }
}
