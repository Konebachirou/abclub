<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Conferencier extends Model
{
    use HasFactory;
    protected $fillable = ['full_name', 'email', 'photo', 'job', 'description', 'event_id'];

    public function events(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
