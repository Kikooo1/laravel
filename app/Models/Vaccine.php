<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $fillable = ['vaccine_name'];
    protected  $primaryKey = 'vaccine_id';


    public function vaccinesadministered()
    {
        return $this->hasMany(VaccinesAdministered::class, 'vaccine_id');
    }
}
