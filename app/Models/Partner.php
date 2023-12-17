<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'logo',
        'status',
        'website',
        'pole_id',
    ];

    public function pole()
    {
        return $this->belongsTo(Pole::class, 'pole_id');
    }
    public function logoUrl(): string
    {
        return Storage::url($this->logo);
    }
    public function scopeWithPoleName($query, $poleName)
    {
        return $query->whereHas('pole', function ($query) use ($poleName) {
            $query->where('name', $poleName);
        });
    }
}
