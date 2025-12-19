<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = ['name', 'description', 'tech_stack', 'demo_url', 'slug'];

    protected static function booted()
    {
        static::creating(function ($project) {
            if (!$project->slug) {
                $project->slug = Str::slug($project->name);
            }
        });
    }
}
