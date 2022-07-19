<?php

namespace App\Models\Admin\ManagmentUser;

use App\Models\ModelAuthenticate;

class Mahasiswa extends ModelAuthenticate
{
    protected $table = 'super_admin__mahasiswa';

    public $fillable = ['nim', 'nama'];
}
