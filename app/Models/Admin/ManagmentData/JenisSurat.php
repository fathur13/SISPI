<?php

namespace App\Models\Admin\ManagmentData;

use App\Models\Admin\ArsipSurat\SuratKeluar;
use App\Models\Admin\ArsipSurat\SuratMasuk;
use App\Models\Model;

class Jenissurat extends Model
{
    public $table = "admin__jenissurat";
    protected $primaryKey = 'id';
    public $incrementing = false;

    function Suratmasuk()
    {
        return $this->hasMany(SuratMasuk::class, 'id_jenissurat');
    }
    function Suratkeluar()
    {
        return $this->hasMany(SuratKeluar::class, 'id_jenissurat');
    }
    function Templatesurat()
    {
        return $this->belongsTo('\App\Models\Kelengkapan', 'id_templatesurat');
    }
}
