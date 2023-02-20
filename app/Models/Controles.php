<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Controles extends Model
{
    protected $fillable = ['imagen', 'doc_id', 'user_id','etiqueta', 'qr', 'fecha', 'denominacion', 'ciudad','colaborador', 'observaciones', 'tipoControl'];
    protected $table = 'controles';

    use HasFactory;
    public function documento()
    {
        //relacion 1 a muchos inversa
        return $this->belongsTo('App\Models\Docs');
    }
    public function usuario()
    {
        //relacion 1 a muchos inversa
        return $this->belongsTo('App\Models\Usuario');
    }
}
