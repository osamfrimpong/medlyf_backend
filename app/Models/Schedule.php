<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['doctor_id','date','location','hospital','region','specialty'];

    public function doctor(){
        return $this->belongsTo(User::class);
    }
}
