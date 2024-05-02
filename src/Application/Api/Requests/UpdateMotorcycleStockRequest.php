<?php

    namespace Application\Api\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class UpdateMotorcycleStockRequest extends FormRequest
    {
        public function rules(): array
        {
            return [
                'stock_id' => ['required', 'exists:motorcycle_stocks,id'],
                'plate' => ['required'],
                'details' => ['required'],
            ];
        }

        public function authorize(): bool
        {
            return true;
        }
    }
