<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    public function price()
    {
        return $this->hasOne('App\PaperPrice');
    }
}
