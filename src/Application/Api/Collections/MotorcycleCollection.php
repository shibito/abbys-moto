<?php

    namespace Application\Api\Collections;

    use Application\Api\Resource\MotorcycleResource;
    use Illuminate\Http\Request;
    use Illuminate\Http\Resources\Json\ResourceCollection;

    class MotorcycleCollection extends ResourceCollection
    {
        public function toArray(Request $request): array
        {
            return [
                'data' => MotorcycleResource::collection($this->collection),
            ];
        }
    }
