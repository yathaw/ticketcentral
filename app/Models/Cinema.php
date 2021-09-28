<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cinema extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    public function country(){
        return $this->belongsTo(City::class);
    }

    public function branches(){
        return $this->hasMany(Branch::class);
    }
}
