<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    use HasFactory;

    protected $fillable = ['species_name'];
    protected $primaryKey = 'specie_id';

    public function pets()
    {
        return $this->hasMany(PetInfo::class, 'specie_id');
    }

}
