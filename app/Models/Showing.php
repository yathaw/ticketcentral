<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Showing extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function movie(){
        return $this->belongsTo(Movie::class);
    }

    public function theater(){
        return $this->belongsTo(Theater::class);
    }


    public function booking(){
        return $this->hasOne(Booking::class);
    }
}
