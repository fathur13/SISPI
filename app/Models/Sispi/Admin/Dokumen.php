<?php

namespace App\Models\Sispi\Admin;

use App\Models\Admin\ManagmentData\Kelengkapan;
use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\Sispi\Admin\ManagmentData\JenisDokumen;

class Dokumen extends Model
{
    public $table = "admin__dokumen";

    function handleUploadFile($field)
    {
        if (request()->hasFile($field)) {
            $file = request()->file($field);
            $destination = "dokumen" . $field;
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $field . "-" . $randomStr . "."  . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->$field = "app/" . $url;
            $this->save();
        }
    }

    function jenisdokumen()
    {
        return $this->belongsTo(JenisDokumen::class, 'id_jenisdokumen');
    }
    function Kelengkapan()
    {
        return $this->belongsTo(Kelengkapan::class, 'id_kelengkapan');
    }
    function getTanggalStringAttribute()
    {
        $tanggal = $this->tanggal;
        return strftime("%d %B %Y", strtotime($this->tanggal));
    }
}
