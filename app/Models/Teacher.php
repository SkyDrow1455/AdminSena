<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    public function area()
    {
        return $this->belongsTo('App\Models\Area');
    }
    public function training_center()
    {
        return $this->belongsTo('App\Models\Training_center');
    }
    public function courses()
    {
        return $this->belongsToMany('App\Models\Course');
    }
}
