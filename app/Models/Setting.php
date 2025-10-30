<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_name',
        'logo',
        'theme_color',
        'contact_email',
        'contact_phone',
        'api_token',
    ];

    // Yeni token oluşturma
    public function generateApiToken()
    {
        $this->api_token = Str::random(60);
        $this->save();
    }

    // Token resetleme
    public function resetApiToken()
    {
        $this->api_token = null;
        $this->save();
    }
}
