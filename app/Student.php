<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    // protected $table = 'students';
}

/*

Secara default jika nama model sama dengan nama table database,, maka akan langsung terhubung.
Jika nama model berbeda dengan nama table maka tambahkan 
    protected $table = 'nama_table';

*/
