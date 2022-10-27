<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departements extends Model
{
    //use HasFactory;
    protected $table = 'departements';
    protected $primaryKey = 'id';
    protected $fillable = ['Desc', 'Nom', 'Capacite'];
}