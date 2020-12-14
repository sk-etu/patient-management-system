<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prescribe_medicine extends Model
{

    protected $guarded =[];


    public function medicinerelation()
    {
       return $this->belongsTo(Medicine::class,'medicine_id','id');
    }


}
