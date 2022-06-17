<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activitie extends Model
{
    use HasFactory;
    public function hijo(){
        return $this->belongsTo(User::class);
    }
    public function user(){
        return $this->belongsTo(Hijo::class);
    }
    public function tutor(){
        return $this->belongsTo(Tutor::class);
    }
}
