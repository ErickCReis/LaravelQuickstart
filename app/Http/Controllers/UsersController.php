<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{

    public function index() {
        $users = collect([
            ['id' => 1, 'name' => 'cliente4'],
            ['id' => 3, 'name' => 'cliente2'],
            ['id' => 2, 'name' => 'cliente3'],
            ['id' => 4, 'name' => 'cliente1']]);

        return view('users.index')->with(compact('users'));
    }
}
