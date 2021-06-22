<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function getUsers()
    {
        $users = $this->getAllUsers();

        return view('admin.user.users', compact('users'));
    }

    public function viewUser(int $id)
    {
        $user = User::find($id);

        return view('admin.user.edit_user', compact('user'));
    }

    public function editUser(Request $request, int $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->role === "Admin") {
            $user->isAdmin = 1;
        } else {
            $user->isAdmin = 0;
        }
        $user->save();

        $users = $this->getAllUsers();

        return view('admin.user.users', compact('users'));
    }

    private function getAllUsers()
    {
        return User::all();
    }
}
