<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEvent extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'event_id', 'status'];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
    public function scopeNotEvents($query)
    {
        return $query->whereHas('event', function ($q) {
            $q->where('is_event', false);
        });
    }

    public function scopeWithEvents($query)
    {
        return $query->whereHas('event', function ($q) {
            $q->where('is_event', true);
        });
    }
}
