<?php

    namespace Application\Api\Resource;

    use Illuminate\Http\Request;
    use Illuminate\Http\Resources\Json\JsonResource;

    /** @mixin \Domain\Rents\Models\Rent */
    class RentResource extends JsonResource
    {
        public function toArray(Request $request): array
        {
            return [
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
                'id' => $this->id,
                'from_date' => $this->from_date,
                'to_date' => $this->to_date,
                'comment_in' => $this->comment_in,
                'comment_out' => $this->comment_out,
                'returned' => $this->returned,

                'client_user_id' => $this->client_user_id,
                'motorcycle_stock_id' => $this->motorcycle_stock_id,

                'clientUser' => new ClientUserResource($this->whenLoaded('clientUser')),
                'motorcycleStock' => new MotorcycleStockResource($this->whenLoaded('motorcycleStock')),
            ];
        }
    }
