<?php

namespace App\Models;

use App\Traits\HasUuid;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ImplementingAgency extends Model
{
    use HasFactory;
    use HasUuid;
    use Sluggable;

    protected $fillable = [];

    public function operating_unit(): BelongsTo
    {
        return $this->belongsTo(OperatingUnit::class);
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }

    /**
     * @return array
     */public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ],
        ];
    }
}