<?php

    namespace Application\Api\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class CreateMotorcycleStockRequest extends FormRequest
    {
        public function rules(): array
        {
            return [
                'motorcycle_id' => ['required', 'exists:motorcycles,id'],
                'plate' => ['required'],
                'details' => ['required'],
            ];
        }

        public function authorize(): bool
        {
            return true;
        }
    }
