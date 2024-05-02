<?php

    namespace Domain\Motorcycle\Models;

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

        protected function casts()
        {
            return [
                'id' => 'string',
            ];
        }
    }
