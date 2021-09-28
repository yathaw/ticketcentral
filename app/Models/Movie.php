<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function genres(){
        return $this->belongsToMany(Genre::class, 'genre_movie')
                    ->withTimestamps();
    }

    public function showings(){
        return $this->hasMany(Showing::class);
    }

    public function acts(){
        return $this->belongsToMany(Act::class, 'act_movie')
                    ->withPivot('character', 'category_id')
                    ->withTimestamps();
    }
}
