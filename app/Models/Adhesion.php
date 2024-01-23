<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adhesion extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'num_payement'
    ];

    public function user()
    {
        return $this->belongsTo(Pole::class, 'user_id');
    }
}
