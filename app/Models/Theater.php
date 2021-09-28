<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Theater extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function branch(){
        return $this->belongsTo(Branch::class);
    }

    public function seats(){
        return $this->hasMany(Seat::class);
    }

    public function showings(){
        return $this->hasMany(Showing::class);
    }
}
