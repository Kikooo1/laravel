<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetInfo extends Model
{
    use HasFactory;

    protected $table = 'pet_info';
    protected $primaryKey = 'pet_id';
    protected $fillable = ['pet_name', 'owner_name', 'img', 'specie_id'];

    public function species(){
        return $this->belongsTo(Species::class, 'specie_id', 'specie_id');
    }

    public function histories(){
        return $this->hasMany(History::class, 'pet_id', 'pet_id');
    }

    public function vaccinesAdministered(){
        return $this->hasMany(VaccinesAdministered::class, 'pet_id', 'pet_id');
    }

    public function reasons()
    {
        return $this->hasManyThrough(
            ReasonOfVisit::class,
            History::class,
            'pet_id', // Foreign key on History table
            'history_id', // Foreign key on ReasonOfVisit table
            'pet_id', // Local key on PetInfo table
            'history_id' // Local key on History table
        );
    }

}
