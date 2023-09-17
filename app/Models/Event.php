<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'illustration',
        'description',
        'is_active',
        'is_free',
        'Number_of_place',
        'start_date',
        'end_date',
        'start_times',
        'end_times',
        'pole_id',
        'lieu',
    ];

    public function pole()
    {
        return $this->belongsTo(Pole::class, 'pole_id');
    }

    public function conferenciers(): HasMany
    {
        return $this->hasMany(Conferencier::class);
    }
    public function scopeWithPoleName($query, $poleName)
    {
        return $query->whereHas('pole', function ($query) use ($poleName) {
            $query->where('name', $poleName);
        });
    }
}
