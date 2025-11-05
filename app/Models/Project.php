<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'url',
        'github_url',
        'technologies',
        'start_date',
        'end_date',
        'is_featured',
        'order',
    ];

    protected $casts = [
        'technologies' => 'array',
        'start_date' => 'date',
        'end_date' => 'date',
        'is_featured' => 'boolean',
    ];

    /**
     * Get the skills associated with this project.
     */
    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'project_skill')
            ->using(ProjectSkill::class)
            ->withPivot(['proficiency_used', 'is_primary', 'order'])
            ->withTimestamps()
            ->orderBy('project_skill.order');
    }

    /**
     * Get only the primary skills for this project.
     */
    public function primarySkills()
    {
        return $this->skills()->wherePivot('is_primary', true);
    }
}
