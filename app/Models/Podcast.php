<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Podcast extends Model
{
    use HasFactory;
    protected $fillable = ['lien', 'illustration'];

    public function illustrationUrl(): string
    {
        return Storage::url($this->illustration);
    }
}