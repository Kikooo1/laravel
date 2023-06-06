<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccinesAdministered extends Model
{
    use HasFactory;
    protected $table = 'vaccines_administered';
    protected $fillable = ['pet_id', 'vaccine_id'];

    public function petInfo(){
        return $this->belongsTo(PetInfo::class, 'pet_id', 'pet_id');
    }

    public function vaccine(){
        return $this->belongsTo(Vaccine::class, 'vaccine_id', 'vaccine_id');
    }

}
