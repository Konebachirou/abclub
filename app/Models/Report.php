<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'illustration',
        'gallery',
        'caption',
        'status',
        'date',
        'pole_id',
        'is_report',
        'is_action',
    ];

    public function pole()
    {
        return $this->belongsTo(Pole::class, 'pole_id');
    }

    public function scopeWithPoleName($query, $poleName)
    {
        return $query->whereHas('pole', function ($query) use ($poleName) {
            $query->where('name', $poleName);
        });
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
