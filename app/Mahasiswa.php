<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //

    protected $table = 'mahasiswa';
}

/*

Secara default jika nama model sama dengan nama table database,, maka akan langsung terhubung.
Jika nama model berbeda dengan nama table maka tambahkan 
    protected $table = 'nama_table';

*/
