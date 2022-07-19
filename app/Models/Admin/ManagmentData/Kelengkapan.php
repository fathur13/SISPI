<?php

namespace App\Models\Admin\ManagmentData;

use App\Models\Model;
use App\Models\Sispi\Admin\Dokumen;

class Kelengkapan extends Model
{
    public $table = "admin__kelengkapan";
    protected $primaryKey = 'id';
    public $incrementing = false;

    function dokumen()
    {
        return $this->hasMany(Dokumen::class, 'id');
    }
}
