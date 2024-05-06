<?php

    namespace Application\Api\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class GetMotorcycleStockRequest extends FormRequest
    {
        public function rules(): array
        {
            return [
                'rented' => 'nullable|boolean',
            ];
        }

        public function authorize(): bool
        {
            return true;
        }
    }
