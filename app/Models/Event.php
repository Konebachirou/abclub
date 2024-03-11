<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'illustration',
        'description',
        'is_active',
        'is_paid',
        'is_event',
        'Number_of_place',
        'start_date',
        'end_date',
        'start_times',
        'end_times',
        'payment_link',
        'pole_id',
        'lieu',
        'conferencier_id'
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
            $query->where('name', $poleName)->where('is_active', true);
        });
    }

    public function illustrationUrl(): string
    {
        return Storage::url($this->illustration);
    }
}
