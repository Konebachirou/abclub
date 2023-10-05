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
    ];

    public function logoUrl(): string
    {
        return Storage::url($this->logo);
    }
}
