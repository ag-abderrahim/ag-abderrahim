<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    protected $casts = [
        'tools' => 'array',
        'featured' => 'boolean',
        'status' => 'boolean',
    ];

    public function images()
    {
        return $this->hasMany(ProjectImages::class);
    }
}
