🛡️ Laravel JWT Authentication with Spatie Role & Permission
Project ini adalah aplikasi Laravel pribadi yang mengimplementasikan sistem autentikasi menggunakan JWT (JSON Web Token) dan manajemen Role & Permission menggunakan package Spatie Laravel Permission.

🚀 Fitur
Autentikasi menggunakan JWT

Registrasi dan login user

Manajemen Role & Permission dengan Spatie

Proteksi endpoint dengan role/permission tertentu

Middleware untuk validasi JWT dan hak akses

🧰 Teknologi
Laravel 12

tymon/jwt-auth

spatie/laravel-permission

MySQL

PHP 8+

git clone https://github.com/username/nama-project.git
cd nama-project
composer install
cp .env.example .env
php artisan key:generate

Konfigurasi JWT
php artisan jwt:secret

Migrasi & Seeder
php artisan migrate --seed
