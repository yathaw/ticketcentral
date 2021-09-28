<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seat extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function theater(){
        return $this->belongsTo(Theater::class);
    }

    public function bookingdetails(){
        return $this->hasMany(Bookingdetail::class);
    }
}
