<?php

Cara menginstall laravel
1. buka terminal di htdocs kemudian ketik :
    => composer create-project --prefer-dist laravel/laravel (namaFolder)
    contoh : composer create-project --prefer-dist laravel/laravel myProjectLaravel
2. buka terminal di folder yang akkan dijadikan project, kemudian buka terminal dan ketik :
    => composer global require laravel/installer
3. menginstall laravel versi sebelumnya atau versi lama
    => composer create-project --prefer-dist laravel/laravel blog "5.8.*"
        atau
    => composer create-project --prefer-dist laravel/laravel blog "5.6.*"
        atau
    => composer create-project --prefer-dist laravel/laravel blog "5.3.*"
        dst
    *latest version of laravel (
                                5.8, 
                                5.7, 
                                5.6,
                                5.5,
                                5.4,
                                5.3,
                                5.2,
                                5.1,
                                5.0,
                                4.2
                                ).
4. Cara mendowload laravel 5.0, dan 4.2
    => composer global require "laravel/installer=~1.1"
    => composer create-project laravel/laravel {directory} 4.2 --prefer-dist

Cara membuat Controller menggunakan Terminal/Command Prompt
Ketik : php artisan make:controller NamaController Parameter
Contoh :  1. php artisan make:controller PagesController
          2. php artisan make:controller MahasiswaController --resource

Cara membuat table database dengan migration laravel
    1. Ketik : php artisan make:migration create_(namatable)_table
    2. Buat schema/aturan di tabel baru tersebut
    3. Ketik : php artisan make:migrate untuk membuat tabel di database

Cara menambahkan kolom di tabel database
    1. ketik : Ketik : php artisan make:migration add_namaKolom_to_namaTabel
    2. Buat schema $table->namaKolom();
    3. Ketik : php artisan make:migrate

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