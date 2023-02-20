<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesInitials extends Model
{
    protected $table = 'images_initials';

    protected  $fillable = ['url', 'doc_id'];
    use HasFactory;

    public function documento()
    {
//relacion 1 a muchos inversa
        return $this->belongsTo('App\Models\Docs');
    }
}
