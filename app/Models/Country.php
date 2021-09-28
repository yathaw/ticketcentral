<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function cities(){
        return $this->hasMany(City::class);
    }

    public function cinemas(){
        return $this->hasMany(Cinema::class);
    }

    public function act(){
        return $this->hasOne(Act::class);
    }
}
