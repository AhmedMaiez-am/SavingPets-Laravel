<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;
    protected $table='associations';
    protected $fillable=['titre','adresse','email','telephone'];
    public $timestamps = false;

    public function actions()

{
return $this->hasMany(Action::class,'association_id','id');
}
}
