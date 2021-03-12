<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Camping extends Model
{
    protected $fillable = ['country', 'city', 'camping_name', 'rating', 'number_of_reviews', 'website','list'];

    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }
}
