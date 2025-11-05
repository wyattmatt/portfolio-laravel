<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'proficiency_level',
        'icon',
        'order',
    ];

    protected $casts = [
        'proficiency_level' => 'integer',
    ];

    /**
     * Get the projects that use this skill.
     */
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_skill')
            ->using(ProjectSkill::class)
            ->withPivot(['proficiency_used', 'is_primary', 'order'])
            ->withTimestamps()
            ->orderBy('project_skill.order');
    }

    /**
     * Get projects where this skill is marked as primary.
     */
    public function primaryProjects()
    {
        return $this->projects()->wherePivot('is_primary', true);
    }
}
