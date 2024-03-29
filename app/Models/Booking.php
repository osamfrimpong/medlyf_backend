<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['schedule_id','patient_id','seen','doctor_id','date'];

    public function patient(){
        return $this->belongsTo(User::class);
    }

    public function doctor(){
        return $this->belongsTo(User::class);
    }

    public function schedule(){
        return $this->belongsTo(Schedule::class);
    }

}
