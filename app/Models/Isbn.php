<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isbn extends Model
{
    protected $table = 'isbn';
    protected $primaryKey = 'id_isbn';
    protected $fillable = ['id_isbn', 'no_isbn'];
    public function books()
    {
        return $this->belongsTo(books::class,'id_isbn');
    }
}
