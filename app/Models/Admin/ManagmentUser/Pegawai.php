<?php

namespace App\Models\Admin\ManagmentUser;

use App\Models\ModelAuthenticate;
use App\Models\Admin\ManagmentUser\Role;
use Illuminate\Support\Str;


class Pegawai extends ModelAuthenticate
{
    protected $table = 'simadu__pegawai';

    public $fillable = ['nama', 'email'];

    public function role()
    {
        return $this->hasMany(Role::class, 'id_pegawai');
    }
    function handleUploadFile($field)
    {
        if (request()->hasFile($field)) {
            $file = request()->file($field);
            $destination = "foto" . $field;
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $field . "-" . $randomStr . "."  . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->$field = "app/" . $url;
            $this->save();
        }
    }
}
