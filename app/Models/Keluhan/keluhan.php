<?php

namespace App\Models\Keluhan;

use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\Sispi\KeluhanKoordinator\JenisLaporan;

class keluhan extends Model
{
    public $table = "keluhan__public";

    function handleUploadFile($field)
    {
        if (request()->hasFile($field)) {
            $file = request()->file($field);
            $destination = "keluhan" . $field;
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $field . "-" . $randomStr . "."  . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->$field = "app/" . $url;
            $this->save();
        }
    }
    function jenislaporan()
    {
        return $this->belongsTo(JenisLaporan::class, 'id_jenislaporan');
    }
}
