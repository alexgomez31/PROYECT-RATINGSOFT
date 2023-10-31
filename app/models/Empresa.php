<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratingsoft extends Model
{
    protected $table = "ratingsoft";
    protected $primaryKey = "id";
    protected $timestamps=false;
    protected $fillable = [
        "nombre",
        "ubicacion",
        "ruc",
        "telefono"
    ];
}
