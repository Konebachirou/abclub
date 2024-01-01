<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AneWinner extends Model
{
    use HasFactory;
    protected $fillable = [
        'team_name',
        'team_picture',
        'year',
        'description',
        'rating',
        'facebook',
        'linkedin',
        'twitter',
        'Instagram',
    ];

    public function pictureUrl(): string
    {
        return Storage::url($this->team_picture);
    }
}