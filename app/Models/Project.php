<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use App\Enums\ProjectTier;

class Project extends Model
{
    protected $fillable = ['name', 'description', 'tech_stack', 'demo_url', 'slug', 'project_tier', 'image'];

    protected $casts = ['project_tier' => ProjectTier::class]; 

    protected static function booted()
    {
        static::creating(function ($project) {
            if (!$project->slug) {
                $project->slug = Str::slug($project->name);
            }
        });

        static::created(function ($project) {
            Log::info('Project created', [
                'project_id' => $project->id,
                'name' => $project->name,
                'tier' => $project->project_tier,
                'image'=> $project->image,
            ]);
        });

        static::updated(function ($project) {
            Log::info('Project updated', [
                'project_id' => $project->id,
                'changed' => $project->getChanges(),
            ]);
        });

        static::deleted(function ($project) {
            Log::warning('Project deleted', [
                'project_id' => $project->id,
                'name' => $project->name,
            ]);
        });
    }
}
