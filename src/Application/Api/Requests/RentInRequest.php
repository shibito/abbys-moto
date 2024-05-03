<?php

    namespace Application\Api\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class RentInRequest extends FormRequest
    {
        public function rules(): array
        {
            return [
                'client_user_id' => ['required', 'exists:client_users,id'],
                'motorcycle_stock_id' => ['required', 'exists:motorcycle_stocks,id'],
                'from_date' => ['required', 'date'],
                'to_date' => ['required', 'date'],
                'comment_in' => ['nullable'],
            ];
        }

        public function authorize(): bool
        {
            return true;
        }
    }
