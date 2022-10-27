<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animaux extends Model
{
    //use HasFactory;

    protected $table = 'animaux';
    protected $primaryKey = 'id';
    protected $fillable = ['ref', 'age', 'race' , 'type' , 'idLoc'];

    public function Locaux()
    {
        return $this->belongsTo(Locaux::class);
    }
}
