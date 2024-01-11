<?php

namespace App\Models;

use App\Models\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'job_title',
        'image',
        'slug',
        'company',
        'type',
        'job_link',
        'domain',
        'location',
        'company_desc',
        'mission',
        'diplomes',
        'experiences',
        'languages',
        'competences',
        'process',
        'pole_id',
        'status',
    ];


    public function pole()
    {
        return $this->belongsTo(Pole::class, 'pole_id');
    }

    public function imageUrl(): string
    {
        return Storage::url($this->image);
    }
}
