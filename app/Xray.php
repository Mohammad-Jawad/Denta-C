<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xray extends Model
{
    public function treatment(){
        return $this->belongsTo(Treatment::class , 'FK_id_treatment', 'id');
    }

<<<<<<< HEAD:app/Xray.php
    public function patient(){
        return $this->belongsTo(Patient::class , 'FK_id_patient', 'id');
    }
=======

>>>>>>> 04a8d3c39c12e2c5bb6848b695fd79ba1b0b8f66:app/XRay.php

    public function doctor(){
        return $this->belongsTo(Doctor::class,'FK_id_doctor','id');
    }
}
