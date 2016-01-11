<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    public function companies()
    {
        return $this->belongsToMany('App\Company','company_profile_customer',
            'company_profile_id','customer_id');
   }


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function jobs()
    {
        return $this->hasMany('App\Job',"customer_id");
    }

    public function setUserIdAttribute($value){
        $this->attributes['user_id'] = $value == "null" ? null : $value;
    }
}
