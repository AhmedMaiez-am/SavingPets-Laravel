<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = 'donation';
    protected $primaryKey = 'id';
    protected $fillable = ['donatorName', 'type', 'amount', 'event_id'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}