<?php

namespace App\Models;

use App\Traits\HasUuid;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Region extends Model
{
    use HasFactory;
    use HasUuid;
    use Sluggable;

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    public function region_investments(): HasMany
    {
        return $this->hasMany(RegionInvestment::class);
    }

    public function investment(): HasOne
    {
        return $this->hasOne(RegionInvestment::class,'region_id')
            ->selectRaw('region_id')
            ->selectRaw('count(id) as count')
            ->selectRaw('sum(y2016) as "y2016"')
            ->selectRaw('sum(y2017) as "y2017"')
            ->selectRaw('sum(y2018) as "y2018"')
            ->selectRaw('sum(y2019) as "y2019"')
            ->selectRaw('sum(y2020) as "y2020"')
            ->selectRaw('sum(y2021) as "y2021"')
            ->selectRaw('sum(y2022) as "y2022"')
            ->selectRaw('sum(y2023) as "y2023"')
            ->selectRaw('sum(y2024) as "y2024"')
            ->selectRaw('sum(y2025) as "y2025"')
            ->groupBy('region_id');
    }

    public function infrastructure(): HasOne
    {
        return $this->hasOne(RegionInfrastructure::class,'region_id')
            ->selectRaw('region_id')
            ->selectRaw('count(id) as count')
            ->selectRaw('sum(y2016) as "y2016"')
            ->selectRaw('sum(y2017) as "y2017"')
            ->selectRaw('sum(y2018) as "y2018"')
            ->selectRaw('sum(y2019) as "y2019"')
            ->selectRaw('sum(y2020) as "y2020"')
            ->selectRaw('sum(y2021) as "y2021"')
            ->selectRaw('sum(y2022) as "y2022"')
            ->selectRaw('sum(y2023) as "y2023"')
            ->selectRaw('sum(y2024) as "y2024"')
            ->selectRaw('sum(y2025) as "y2025"')
            ->groupBy('region_id');
    }

    public function total_investment()
    {
        return $this->hasOne(RegionInvestment::class,'region_id')
            ->selectRaw('region_id')
            ->selectRaw('sum(y2016+y2017+y2018+y2019+y2020+y2021+y2022+y2023+y2024+y2025) AS total')
            ->groupBy('region_id');
    }

    public function infrastructure_investment()
    {
        return $this->hasOne(RegionInfrastructure::class,'region_id')
            ->selectRaw('region_id')
            ->selectRaw('sum(y2016+y2017+y2018+y2019+y2020+y2021+y2022+y2023+y2024+y2025) AS total')
            ->groupBy('region_id');
    }

    /**
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
