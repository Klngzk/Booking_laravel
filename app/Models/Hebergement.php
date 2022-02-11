<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hebergement extends Model
{
    protected $fillable = ['title','type_heber','city','review','photo1','photo2','photo3','photo4','photo5','description','detail','rooms','type_room','available','prix'];
    protected $date = ['created_at','updated_at'];
    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
