<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table="company_profile";

    public function customers()
    {

        return $this->belongsToMany('App\Customer','company_profile_customer',
            'company_profile_id','customer_id');
    }

    public function jobs()
    {
        return $this->hasMany('App\Job',"company_id");
    }
}
