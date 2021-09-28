<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function showing(){
        return $this->belongsTo(Showing::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function bookingdetails(){
        return $this->hasMany(Bookingdetail::class);
    }
}
