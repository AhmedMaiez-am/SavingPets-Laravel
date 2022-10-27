<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccin extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [ "titre", "type", "date_création", "date_expiration" ];

    public function sterilisations()
        {
            return $this->hasMany(Sterilisation::class);
        }
}