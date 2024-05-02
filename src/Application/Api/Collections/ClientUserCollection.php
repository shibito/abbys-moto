<?php

    namespace Application\Api\Collections;

    use Application\Api\Resource\ClientUserResource;
    use Illuminate\Http\Request;
    use Illuminate\Http\Resources\Json\ResourceCollection;

    class ClientUserCollection extends ResourceCollection
    {
        public function toArray(Request $request): array
        {
            return [
                'data' => ClientUserResource::collection($this->collection),
            ];
        }
    }
