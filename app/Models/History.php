<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class History extends Model
{
    use HasFactory;

    protected $table = 'history';
    protected $primaryKey = 'history_id';
    protected $fillable = ['pet_id', 'reason_of_visit_id', 'weight_kg', 'date_visited'];

    public function petInfo(){
        return $this->belongsTo(PetInfo::class, 'pet_id', 'pet_id');
    }

    public function reasonOfVisit()
    {
        return $this->hasOne(ReasonOfVisit::class, 'reason_of_visit_id', 'reason_of_visit_id');
    }

}
