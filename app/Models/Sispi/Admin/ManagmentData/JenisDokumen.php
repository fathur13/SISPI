<?php

namespace App\Models\Sispi\Admin\ManagmentData;

use App\Models\Model;
use App\Models\Sispi\Admin\Dokumen;

class JenisDokumen extends Model
{
    public $table = "admin__jenisdokumen";
    protected $primaryKey = 'id';
    public $incrementing = false;

    function dokumen()
    {
        return $this->hasMany(Dokumen::class, 'id_jenissurat');
    }
}
