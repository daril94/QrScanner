<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docs extends Model
{
    protected $table = 'docs';
    use HasFactory;
    protected $guarded = ["id"];

    public function files()
    {
// relacion 1 a muchos
        return $this->hasMany('App\Models\ImagesInitials');
    }

    public function control()
    {
// relacion 1 a muchos
        return $this->hasMany('App\Models\Controles');
    }

}
