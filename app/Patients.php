<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'age',
        'gender',
        'height',
        'weight',
        'bmi',
        'ward',
        'lga',
        'state',
        'image',
    ];

    public function doctors(){
        return $this->belongsTo('App\Doctors');
    }
}
