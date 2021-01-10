<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Prescription extends Model
{
    
   protected $guarded=[]; 

   //
   public function patientrelation()
   {
      return $this->belongsTo(Patient::class,'patient_id','id');
   }


//
   public function prescribe_medicinerelation()
   {
      return $this->hasMany(Prescribe_medicine::class,'prescription_id','id');
   }

}
