<?php

namespace Application\Api\Resource;

use Application\Api\Collections\MotorcycleStockCollection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \Domain\Motorcycle\Models\Motorcycle */
class MotorcycleResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'id' => $this->id,
            'make' => $this->make,
            'model' => $this->model,
            'year' => $this->year,
            'type' => $this->type,
            'displacement' => $this->displacement,
            'engine' => $this->engine,
            'power' => $this->power,
            'torque' => $this->torque,
            'compression' => $this->compression,
            'bore_stroke' => $this->bore_stroke,
            'fuel_system' => $this->fuel_system,
            'fuel_control' => $this->fuel_control,
            'ignition' => $this->ignition,
            'cooling' => $this->cooling,
            'gearbox' => $this->gearbox,
            'transmission' => $this->transmission,
            'clutch' => $this->clutch,
            'frame' => $this->frame,
            'front_suspension' => $this->front_suspension,
            'front_wheel_travel' => $this->front_wheel_travel,
            'rear_suspension' => $this->rear_suspension,
            'rear_wheel_travel' => $this->rear_wheel_travel,
            'front_tire' => $this->front_tire,
            'rear_tire' => $this->rear_tire,
            'front_brakes' => $this->front_brakes,
            'rear_brakes' => $this->rear_brakes,
            'total_weight' => $this->total_weight,
            'seat_height' => $this->seat_height,
            'total_height' => $this->total_height,
            'total_length' => $this->total_length,
            'total_width' => $this->total_width,
            'ground_clearance' => $this->ground_clearance,
            'wheelbase' => $this->wheelbase,
            'fuel_capacity' => $this->fuel_capacity,
            'starter' => $this->starter,
            'top_speed' => $this->top_speed,
            'dry_weight' => $this->dry_weight,
            'emission' => $this->emission,
            'fuel_consumption' => $this->fuel_consumption,
            'lubrication' => $this->lubrication,
            'valves_per_cylinder' => $this->valves_per_cylinder,
            'stocks' => new MotorcycleStockCollection($this->whenLoaded('stocks')),
//            'stocks_count' => $this->whenLoaded('stocks')
        ];
    }
}
