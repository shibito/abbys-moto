<?php

    namespace Application\Api\Resource;

    use Illuminate\Http\Request;
    use Illuminate\Http\Resources\Json\JsonResource;

    /** @mixin \Domain\ClientUsers\Models\ClientUser */
    class ClientUserResource extends JsonResource
    {
        public function toArray(Request $request): array
        {
            return [
                'id' => $this->id,
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'user_id' => $this->user_id,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ];
        }
    }
