<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index() {
        $users = [
            ['id'=>1, 'name'=>'cliente1'],
            ['id'=>2, 'name'=>'cliente2'],
            ['id'=>3, 'name'=>'cliente3'],
            ['id'=>4, 'name'=>'cliente4']];

        //dd($users);

        return view('users.index')->with(compact('users'));
    }
}
