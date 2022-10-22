<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidatures extends Model
{
    //use HasFactory;
    protected $table = 'candidatures';
    protected $primaryKey = 'id';
    protected $fillable = ['position', 'nom', 'prenom', 'description', 'email', 'phone'];
}