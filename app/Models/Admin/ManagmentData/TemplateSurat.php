<?php

namespace App\Models\Admin\ManagmentData;

use Illuminate\Support\Str;
use App\Models\Model;

class TemplateSurat extends Model
{
    public $table = "admin__template_surat";

    function handleUploadFile($field)
    {
        if (request()->hasFile($field)) {
            $file = request()->file($field);
            $destination = "template-surat" . $field;
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $field . "-" . $randomStr . "."  . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->$field = "app/" . $url;
            $this->save();
        }
    }

    function Kelengkapan()
    {
        return $this->belongsTo('\App\Models\Admin\ManagmentData\Kelengkapan', 'id_templatesurat');
    }
    function SuratMasuk()
    {
        return $this->belongsTo('\App\Models\Admin\ArsipSurat\SuratMasuk', 'id_templatesurat');
    }
    function SuratKeluar()
    {
        return $this->belongsTo('\App\Models\Admin\ArsipSurat\SuratKeluar', 'id_templatesurat');
    }}
