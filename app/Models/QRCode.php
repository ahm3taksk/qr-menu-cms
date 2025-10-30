<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QRCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'setting_id',
        'name',
        'code',
    ];

    public function setting()
    {
        return $this->belongsTo(Setting::class);
    }
}
