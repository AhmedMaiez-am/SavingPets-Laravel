<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;
    protected $table='associations';
    protected $primaryKey='id';
    protected $fillable=['titre','adresse','email','telephone'];
}
