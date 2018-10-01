<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{

<<<<<<< HEAD
        public function patient(){
        return $this->belongsTo(Patient::class,'FK_id_patient', 'id');
=======
    protected $guarded = [];
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
>>>>>>> 04a8d3c39c12e2c5bb6848b695fd79ba1b0b8f66
    }
    public function xray(){
        return $this->hasOne(Xray::class);
    }





}
