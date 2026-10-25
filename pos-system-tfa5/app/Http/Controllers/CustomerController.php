<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'id' => 1,
                'name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
                'phone' => '09123456789',
            ],
            [
                'id' => 2,
                'name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'phone' => '09234567890',
            ],
            [
                'id' => 3,
                'name' => 'Pedro Reyes',
                'email' => 'pedro@example.com',
                'phone' => '09345678901',
            ],
            [
                'id' => 4,
                'name' => 'Ana Garcia',
                'email' => 'ana@example.com',
                'phone' => '09456789012',
            ],
            [
                'id' => 5,
                'name' => 'Carlo Mendoza',
                'email' => 'carlo@example.com',
                'phone' => '09567890123',
            ],
        ];

        return view('customers', compact('customers'));
    }
}