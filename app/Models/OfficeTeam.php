<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OfficeTeam extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'image',
        'level',
        'country',
        'city',
        'email',
        'is_active',
        'description',
        'facebook',
        'linkedin',
        'twitter',
        'instagram',
        'office_id'
    ];

    protected $appends = ['full_name'];

    public function fullName(): Attribute
    {
        return Attribute::make(
            get: function () {
                $first_name = Str::ucfirst($this->first_name);
                $last_name = Str::upper($this->last_name);

                return "{$last_name} {$first_name}";
            }

        );
    }

    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }

    public function imageUrl(): string
    {
        return Storage::url($this->image);
    }
}
