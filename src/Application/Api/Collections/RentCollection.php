<?php

    namespace Application\Api\Collections;

    use Application\Api\Resource\RentResource;
    use Illuminate\Http\Request;
    use Illuminate\Http\Resources\Json\ResourceCollection;

    class RentCollection extends ResourceCollection
    {
        public function toArray(Request $request): array
        {
            return [
                'data' => RentResource::collection($this->collection),
            ];
        }
    }
