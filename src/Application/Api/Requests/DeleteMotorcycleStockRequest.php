<?php

    namespace Application\Api\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class DeleteMotorcycleStockRequest extends FormRequest
    {
        public function rules(): array
        {
            return [
                'stock_id' => ['required', 'exists:motorcycle_stocks,id'],
            ];
        }

        public function authorize(): bool
        {
            return true;
        }
    }
