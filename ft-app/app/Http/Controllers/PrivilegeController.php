<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PrivilegeController extends Controller
{
    public function index() {

        $users = User::select('id', 'name', 'created_at', 'role')->get();

        return view('privileges', ['users' => $users]);
    }

    public function update_user() {
        return('welcome');
    }
}
