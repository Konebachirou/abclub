<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'illustration',
        'caption',
        'album',
        'status',
        'date',
        'pole_id',
        'is_report',
        'is_action',
        'files',
    ];


    protected $casts = [
        'album' => 'array',
        'files' => 'array',
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
    public function illustrationUrl(): string
    {
        return Storage::url($this->illustration);
    }
}
