<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'name' => 'John Smith',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier1',
                'name' => 'Jane Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier2',
                'name' => 'Mark Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'staff1',
                'name' => 'Anna Reyes',
                'role' => 'Staff'
            ],
            [
                'username' => 'manager',
                'name' => 'Paul Garcia',
                'role' => 'Manager'
            ]
        ];

        return view('users', compact('users'));
    }
}