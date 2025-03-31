<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class computers extends Model
{
    public function apprentice()
    {
        return $this->hasOne('App\Models\Apprentices');
    }
}
