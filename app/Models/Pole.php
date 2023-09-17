<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pole extends Model
{
    use HasFactory;
    protected $fillable = [
        'icon',
        'name',
        'description'
    ];

    public function reports(): HasMany
    {
        return $this->hasMany(Report::class);
    }
    public function events(): HasMany
    {
        return $this->hasMany(Report::class);
    }
}
