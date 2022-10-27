<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sterilisation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [ "libelle","responsable", "description", "date", "vaccin_id" ];

    public function vaccins()
    {
        return $this->belongsTo(Vaccin::class);
    }
}
