<?php

namespace App\Models\Sispi\KeluhanKoordinator;

use App\Models\Keluhan\keluhan;
use App\Models\Model;

class JenisLaporan extends Model
{
    public $table = "keluhan__managment_data__jenislaporan";
    protected $primaryKey = 'id';
    public $incrementing = false;

    function keluhan()
    {
        return $this->hasMany(keluhan::class, 'id_jenislaporan');
    }
}