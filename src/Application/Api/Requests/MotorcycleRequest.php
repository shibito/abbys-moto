<?php

namespace Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MotorcycleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'make' => ['required'],
            'model' => ['required'],
            'year' => ['required', 'integer'],
            'type' => ['nullable'],
            'displacement' => ['nullable'],
            'engine' => ['nullable'],
            'power' => ['nullable'],
            'torque' => ['nullable'],
            'compression' => ['nullable'],
            'bore_stroke' => ['nullable'],
            'fuel_system' => ['nullable'],
            'fuel_control' => ['nullable'],
            'ignition' => ['nullable'],
            'cooling' => ['nullable'],
            'gearbox' => ['required'],
            'transmission' => ['nullable'],
            'clutch' => ['nullable'],
            'frame' => ['nullable'],
            'front_suspension' => ['nullable'],
            'front_wheel_travel' => ['nullable'],
            'rear_suspension' => ['nullable'],
            'rear_wheel_travel' => ['nullable'],
            'front_tire' => ['nullable'],
            'rear_tire' => ['nullable'],
            'front_brakes' => ['nullable'],
            'rear_brakes' => ['nullable'],
            'total_weight' => ['nullable'],
            'seat_height' => ['nullable'],
            'total_height' => ['nullable'],
            'total_length' => ['nullable'],
            'total_width' => ['nullable'],
            'ground_clearance' => ['nullable'],
            'wheelbase' => ['nullable'],
            'fuel_capacity' => ['nullable'],
            'starter' => ['nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
