<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    public function area()
    {
        return $this->belongsTo('App\Models\Area');
    }
    public function apprentices()
    {
        return $this->hasMany('App\Models\Apprentices');
    }
    public function teachers()
    {
        return $this->belongsToMany('App\Models\Teachers');
    }
    public function training_center()
    {
        return $this->belongsTo('App\Models\Training_centers');
    }
}
