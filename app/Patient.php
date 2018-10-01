<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function doctor(){
        return $this->belongsTo(Doctor::class,'FK_id_Doctor','id');
    }

    public function treatment(){
        return $this->hasMany(Treatment::class,'FK_id_patient','id');
    }
    public function xray(){
        return $this->hasMany(Xray::class);
    }
}
