<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    //use HasFactory;
    protected $table = 'actions';
    protected $fillable = ['description', 'date', 'association_id'];
    public $timestamps = false;

    public function Associations()
    {
        return $this->belongsTo(Associations::class);
    }
}