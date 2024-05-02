<?php

    namespace Application\Api\Collections;

    use Application\Api\Resource\MotorcycleStockResource;
    use Illuminate\Http\Request;
    use Illuminate\Http\Resources\Json\ResourceCollection;

    /** @see \Domain\Motorcycle\Models\MotorcycleStock */
    class MotorcycleStockCollection extends ResourceCollection
    {
        public function toArray(Request $request): array
        {
            return [
                'data' => MotorcycleStockResource::collection($this->collection),
            ];
        }
    }
