<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function paper_price()
    {
        return $this->hasOne('App\PaperPrice');
    }

    public function setUserIAttribute($value){
        $this->attributes['user_id'] = $value == "null" ? null : $value;
    }

    public function setPaperPriceIdAttribute($value){
        $this->attributes['paper_price_id'] = $value == "null" ? null : $value;
    }

    public function setCustomerIdAttribute($value){
        $this->attributes['customer_id'] = $value == "null" ? null : $value;
    }
    public function setCompanyIdAttribute($value){
        $this->attributes['company_id'] = $value == "null" ? null : $value;
    }

}
