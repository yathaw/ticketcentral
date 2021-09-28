<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function cinema(){
        return $this->belongsTo(Cinema::class);
    }

    public function theaters(){
        return $this->hasMany(Theater::class);
    }
}
