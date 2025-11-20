<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Satu tujuan punya banyak aspirasi
    public function aspirasi()
    {
        return $this->hasMany(Aspirasi::class);
    }
}
