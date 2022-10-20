<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locaux extends Model
{
    //use HasFactory;
    protected $table = 'locaux';
    protected $primaryKey = 'id';
    protected $fillable = ['telephone_local', 'adresse_local', 'fax_local'];
}
