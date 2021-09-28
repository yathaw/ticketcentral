<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function branches(){
        return $this->hasMany(Branch::class);
    }
}
