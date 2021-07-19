<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'age',
        'gender',
        'cadre'
    ];

    public function department(){
        return $this->hasOne('App\Departments');
    }

    public function patients(){
        return $this->hasMany('App\Patients');
    }
}
