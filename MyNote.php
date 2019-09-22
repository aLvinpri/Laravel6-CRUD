<?php

Cara membuat Controller menggunakan Terminal/Command Prompt
Ketik : php artisan make:controller NamaController Parameter
Contoh :  1. php artisan make:controller PagesController
          2. php artisan make:controller MahasiswaController --resource

Cara membuat table database dengan migration laravel
    1. Ketik : php artisan make:migration create_(namatable)_table
    2. Buat schema/aturan di tabel baru tersebut
    3. Ketik : php artisan make:migrate untuk membuat tabel di database

Mengatasi error saat php artisan migrate
  1. buka file appServiceProvider.php
  2. tambahkan "
      use Illuminate\Support\ServiceProvider;
      use Illuminate\Support\Facades\Schema;
      ".

  3. tambahkan "
      /**
      * Bootstrap any application services.
      *
      * @return void
      */
      public function boot()
      {
          //
          Schema::defaultStringLength(128);
      }
      ".

Membuat model dengan Eloquent ORM
    1. buka terminal ketik php artisan make:model (Nama_model)
        contoh php artisan make:model Student

Membuat model dan controller sekaligus dan saling terhubung dengan Eloquent ORM
    1. buka terminal ketik php artisan make:controller -r -m (Nama_model)
        contoh : php artisan make:controller -r -m Student (tunggal)
        controller dan model student akan langsung terhubung juga dengan table students (jamak) di database