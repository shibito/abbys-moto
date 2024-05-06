<?php

    namespace Application\Api\Resource;

    use Illuminate\Http\Request;
    use Illuminate\Http\Resources\Json\JsonResource;

    /** @mixin \Domain\Motorcycle\Models\MotorcycleStock */
    class MotorcycleStockResource extends JsonResource
    {
        public function toArray(Request $request): array
        {
            return [
                'id' => $this->id,
                'plate' => $this->plate,
                'details' => $this->details,
                'motorcycle_id' => $this->motorcycle_id,
                'motorcycle' => new MotorcycleResource($this->whenLoaded('motorcycle')),
                'rented' => new RentResource($this->whenLoaded('rented')),
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ];
        }
    }
