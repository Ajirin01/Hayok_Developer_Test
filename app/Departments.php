<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $fillable = [
        'name'
    ];

    public function doctors(){
        return $this->hasMany('App\Doctors');
    }
}
