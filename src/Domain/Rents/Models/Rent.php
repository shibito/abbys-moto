<?php

    namespace Domain\Rents\Models;

    use Domain\ClientUsers\Models\ClientUser;
    use Domain\Motorcycle\Models\MotorcycleStock;
    use Illuminate\Database\Eloquent\Concerns\HasUuids;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    /**
     * @property mixed $return_date
     */
    class Rent extends Model
    {
        use HasUuids, HasFactory;

        protected $fillable = [
            'client_user_id',
            'motorcycle_stock_id',
            'from_date',
            'to_date',
            'return_date',
            'comment_in',
            'comment_out',
            'returned',
        ];

        public function clientUser(): BelongsTo
        {
            return $this->belongsTo(ClientUser::class);
        }

        public function motorcycleStock(): BelongsTo
        {
            return $this->belongsTo(MotorcycleStock::class);
        }

        protected function casts(): array
        {
            return [
                'from_date' => 'datetime',
                'to_date' => 'datetime',
            ];
        }
    }
