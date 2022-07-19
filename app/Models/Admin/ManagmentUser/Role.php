<?php

namespace App\Models\Admin\ManagmentUser;

use App\Models\Model;
use App\Models\Admin\ManagmentUser\Module;
use App\Models\Admin\ManagmentUser\Pegawai;

class Role extends Model
{
    protected $table = 'super_admin__role';

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
    public function module()
    {
        return $this->belongsTo(Module::class, 'id_module');
    }
}
