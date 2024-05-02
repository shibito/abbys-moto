<?php

namespace Domain\Motorcycle\Models;

use Domain\Motorcycle\QueryBuilder\FulltextSearchBuilder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Motorcycle extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'make',
        'model',
        'year',
        'type',
        'displacement',
        'engine',
        'power',
        'torque',
        'compression',
        'bore_stroke',
        'valves_per_cylinder',
        'fuel_system',
        'fuel_control',
        'ignition',
        'lubrication',
        'cooling',
        'gearbox',
        'transmission',
        'clutch',
        'fuel_consumption',
        'emission',
        'frame',
        'front_suspension',
        'front_wheel_travel',
        'rear_suspension',
        'rear_wheel_travel',
        'front_tire',
        'rear_tire',
        'front_brakes',
        'rear_brakes',
        'total_weight',
        'seat_height',
        'total_height',
        'total_length',
        'total_width',
        'ground_clearance',
        'wheelbase',
        'fuel_capacity',
        'starter',
        'dry_weight',
        'top_speed',
    ];

    public function stocks(): HasMany
    {
        return $this->hasMany(MotorcycleStock::class);
    }

    public function newEloquentBuilder($query): FulltextSearchBuilder
    {
        return new FulltextSearchBuilder($query);
    }
}
