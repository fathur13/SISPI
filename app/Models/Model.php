<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Support\Carbon;

class Model extends BaseModel
{
    protected $keyType = 'string';
    public $incrementing = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->id = (string) Str::orderedUuid();
        });
    }

    public function format()
    {
        return Carbon::parse($this->attribute['tanggal'])
        ->translatedFormat('d, M Y');
    }
}