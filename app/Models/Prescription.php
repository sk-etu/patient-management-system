<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    
   protected $guarded=[]; 


   //
   public function diagnosisrelation()
   {
      return $this->belongsTo(Diagnosis_list::class,'diagnosis_id','id');
   }


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
