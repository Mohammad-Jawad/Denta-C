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
        return $this->belongsTo(Doctor::class,'doctor_id','id');
    }

<<<<<<< HEAD
    public function treatment(){
        return $this->hasMany(Treatment::class,'FK_id_patient','id');
    }
    public function xray(){
        return $this->hasMany(Xray::class);
    }
=======
    public function treatments(){
        return $this->hasMany(Treatment::class,'patient_id','id');
    }


>>>>>>> 04a8d3c39c12e2c5bb6848b695fd79ba1b0b8f66
}
