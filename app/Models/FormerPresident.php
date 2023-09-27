<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormerPresident extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'image',
        'start_date',
        'end_date',
        'facebook',
        'linkedin',
        'twitter',
    ];

    protected $appends = ['full_name', 'period'];

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

    public function period(): Attribute
    {
        return Attribute::make(
            get: function () {
                return "{$this->start_date} - {$this->end_date}";
            }
        );
    }
}
