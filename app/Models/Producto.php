<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $primary_key ='id_producto';

    protected $fillable = [
        "nombre_producto",
        "marca",
        "id_usuario"
    ];

    //relacion
    public function user(){
        return $this->belongsTo(User::class,"id_usuario");
    }
    //hola mundo
    //hola soy un code de java
}
