<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konten extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function deskripsi()
    {
        return $this->belongsTo(deskripsi::class);
    }

    public function varian()
    {
        return $this->belongsToMany(varian::class);
    }
}
