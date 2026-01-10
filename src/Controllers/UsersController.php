<?php

namespace App\Controllers;

use App\Models\User;

class UsersController
{
    public function index()
    {
        $users = User::all();
        view('users/index', compact('users'));
    }

    public function view()
    {
        $user = User::find($_GET['id'] ?? 0);
        if (!$user) {
            return redirect('/users');
        }
        view('users/view', compact('user'));
    }

    public function edit()
    {
        $user = User::find($_GET['id'] ?? 0);
        if (!$user) {
            return redirect('/users');
        }
        view('users/edit', compact('user'));
    }

    public function update()
    {
        $user = User::find($_POST['id'] ?? 0);
        if (!$user) {
            return redirect('/users');
        }
        $user->email = $_POST['email'];
        if (!empty($_POST['password'])) {
            $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        }
        $user->save();
        redirect('/users');
    }

    public function destroy()
    {
        $user = User::find($_GET['id'] ?? 0);
        if ($user) {
            $user->delete();
        }
        redirect('/users');
    }
}
