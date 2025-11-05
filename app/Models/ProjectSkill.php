<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProjectSkill extends Pivot
{
    protected $table = 'project_skill';

    protected $fillable = [
        'project_id',
        'skill_id',
        'proficiency_used',
        'is_primary',
        'order',
    ];

    protected $casts = [
        'proficiency_used' => 'integer',
        'is_primary' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Get the project that owns the pivot.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Get the skill that owns the pivot.
     */
    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
