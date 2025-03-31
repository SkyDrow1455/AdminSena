<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    public function area()
    {
        return $this->belongsTo('App\Models\Area');
    }
    public function training_center()
    {
        return $this->belongsTo('App\Models\Training_centers');
    }
    public function courses()
    {
        return $this->belongsToMany('App\Models\Courses');
    }
}
