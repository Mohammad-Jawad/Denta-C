<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xray extends Model
{
    public function treatment(){
        return $this->belongsTo(Treatment::class , 'FK_id_treatment', 'id');
    }

    public function patient(){
        return $this->belongsTo(Patient::class , 'FK_id_patient', 'id');
    }

    public function doctor(){
        return $this->belongsTo(Doctor::class,'FK_id_doctor','id');
    }
}
