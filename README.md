# Laravel POS System

A simple Point of Sale (POS) application developed using Laravel, based on the previous TFA1 project.

## Pages

- **Home** (`/`) – Landing page
- **About** (`/about`) – Information about the POS system
- **Customer Accounts** (`/customers`) – Displays 5 sample customers
- **User Accounts** (`/users`) – Displays 5 sample users

## Features

- Four functional routes
- Three controllers
- Four Blade views
- Static PHP arrays containing sample account data
- `@foreach` loops for displaying customer and user records
- Navigation links between all four pages

## Technologies Used

- PHP
- Laravel 12
- Blade Templates
- HTML

## How to Run

1. Install PHP and Composer.
2. Install Laravel dependencies using `composer install`.
3. Copy `.env.example` to `.env`.
4. Run `php artisan key:generate`.
5. Start the application using `php artisan serve`.
6. Open `http://127.0.0.1:8000`.

## Note

Customer and user records are stored in static PHP arrays. No database is required for displaying the sample accounts.
