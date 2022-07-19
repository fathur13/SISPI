<?php

namespace App\Models\Admin\ArsipSurat;

use App\Models\Admin\ManagmentData\Jenissurat;
use Illuminate\Support\Str;
use App\Models\Model;

class SuratKeluar extends Model
{
    public $table = "admin__suratkeluar";

    function handleUploadFile($field)
    {
        if (request()->hasFile($field)) {
            $file = request()->file($field);
            $destination = "suratkeluar" . $field;
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $field . "-" . $randomStr . "."  . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->$field = "app/" . $url;
            $this->save();
        }
    }
    
    function jenissurat()
    {
        return $this->belongsTo(Jenissurat::class, 'id_jenissurat');
    }
    function Kelengkapan()
    {
        return $this->belongsTo('\App\Models\Admin\ManagmentData\Kelengkapan', 'id_kelengkapan');
    }
    function TemplateSurat()
    {
        return $this->belongsTo('\App\Models\Admin\ManagmentData\Kelengkapan', 'id_templatesurat');
    }
    function getTanggalStringAttribute()
    {
        $tanggal = $this->tanggal;
        return strftime("%d %B %Y", strtotime($this->tanggal));
    }
}
