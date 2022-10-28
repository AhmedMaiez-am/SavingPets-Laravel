<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';
    protected $primaryKey = 'id';
    protected $fillable = ['nameEvent', 'description'];

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}