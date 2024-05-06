<?php

    namespace Domain\Motorcycle\Models;

    use Domain\Motorcycle\QueryBuilder\MotorcycleStockBuilder;
    use Domain\Rents\Models\Rent;
    use Illuminate\Database\Eloquent\Concerns\HasUuids;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class MotorcycleStock extends Model
    {
        use HasUuids, HasFactory;

        protected $fillable = [
            'motorcycle_id',
            'plate',
            'details',
        ];

        public function motorcycle(): BelongsTo
        {
            return $this->belongsTo(Motorcycle::class);
        }

        public function rented()
        {
            return $this->hasOne(Rent::class, 'motorcycle_stock_id');
        }

        public function newEloquentBuilder($query): MotorcycleStockBuilder
        {
            return new MotorcycleStockBuilder($query);
        }

        protected function casts()
        {
            return [
                'id' => 'string',
            ];
        }
    }
