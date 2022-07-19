<?php

namespace App\Models\Admin\ManagmentUser;
use App\Models\Model;
use App\Models\Admin\ManagmentUser\Role;

class Module extends Model
{
    protected $table = 'super_admin__module';

    public function role()
    {
        return $this->hasMany(Role::class, 'id_module');
    }
}
