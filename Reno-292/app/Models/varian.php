<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class varian extends Model
{
    use HasFactory;
    public function konten()
    {
        return $this->hasMany(konten::class);
    }
}
