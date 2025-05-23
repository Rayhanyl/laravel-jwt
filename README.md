# 🛡️ Laravel JWT Authentication with Spatie Role & Permission

Project ini adalah aplikasi Laravel pribadi yang mengimplementasikan sistem autentikasi menggunakan **JWT (JSON Web Token)** dan manajemen **Role & Permission** menggunakan package **[Spatie Laravel Permission](https://spatie.be/docs/laravel-permission)**.

---

## 🚀 Fitur

- ✅ Autentikasi menggunakan JWT
- ✅ Registrasi dan login user
- ✅ Manajemen Role & Permission dengan Spatie
- ✅ Proteksi endpoint berdasarkan role/permission
- ✅ Middleware untuk validasi token dan hak akses

---

## 🧰 Teknologi yang Digunakan

- Laravel 12
- [tymon/jwt-auth](https://github.com/tymondesigns/jwt-auth)
- [spatie/laravel-permission](https://github.com/spatie/laravel-permission)
- MySQL
- PHP 8.2+

---

## 🔧 Instalasi

1. Clone repository

```bash
git clone https://github.com/username/nama-project.git
cd nama-project
```

2. Install dependency

```bash
composer install
```

3. Salin file .env

```bash
cp .env.example .env
php artisan key:generate
```

4. Konfigurasi JWT

```bash
php artisan jwt:secret
```

5. Jalankan migrasi

```bash
php artisan migrate
```