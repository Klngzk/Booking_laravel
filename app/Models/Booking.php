<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['date_a','date_de','user_id','hebergement_id','person','rooms'];
    protected $date = ['date_a','date_de','created_at','updated_at'];

    public function hebergement()
    {
        return $this->belongsTo(Hebergement::class,'hebergement_id');
    }
}
