<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conferencier extends Model
{
    use HasFactory;
    protected $fillable = ['full_name', 'email', 'photo', 'job', 'description', 'event_id'];

    public function events(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function photoUrl(): string
    {
        return Storage::url($this->photo);
    }
}
