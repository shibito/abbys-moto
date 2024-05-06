<?php

    namespace Domain\ClientUsers\Models;

    use Domain\Users\Models\User;
    use Illuminate\Database\Eloquent\Concerns\HasUuids;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class ClientUser extends Model
    {
        use HasUuids, HasFactory;

        protected $fillable = [
            'firstname',
            'lastname',
            'address',
            'phone1',
            'phone2',
            'user_id',
        ];

        public function user(): BelongsTo
        {
            return $this->belongsTo(User::class);
        }
    }
