<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaperPrice extends Model
{
    protected $table="paper_price";

    public function jobs()
    {
        return $this->belongsTo('App\Job',"paper_price_id");
    }

    public function paper()
    {
        return $this->belongsTo('App\Paper');
    }

    public function setCompanyIdAttribute($value){
        $this->attributes['company_id'] = $value == "null" ? null : $value;
    }

    public function setShopIdAttribute($value){
        $this->attributes['shop_id'] = $value == "null" ? null : $value;
    }
}
