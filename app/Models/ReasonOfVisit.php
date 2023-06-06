<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReasonOfVisit extends Model
{
    use HasFactory;

    protected $table = 'reason_of_visit';
    protected $primaryKey = 'reason_of_visit_id';
    protected $fillable = [
        'reason',
    ];

    public function histories()
    {
        return $this->hasMany(History::class, 'reason_of_visit_id', 'reason_of_visit_id');
    }


}
