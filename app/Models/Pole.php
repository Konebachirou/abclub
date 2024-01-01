<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function iconUrl(): string
    {
        return Storage::url($this->icon);
    }

    public function partners(): HasMany
    {
        return $this->hasMany(Partner::class);
    }

    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }
}
