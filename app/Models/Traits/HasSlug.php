<?php

namespace App\Models\Traits;


trait HasSlug
{
    public static function bootHasSlug()
    {
        static::creating(function ($model) {
            $model->slug = \Str::slug($model->jobTitle . '-' . $model->company);
        });
    }
}
