<?php

    namespace Application\Api\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class RentOutRequest extends FormRequest
    {
        public function rules(): array
        {
            return [
//                'client_user_id' => ['required', 'exists:client_users'],
//                'motorcycle_stock_id' => ['required', 'exists:motorcycle_stocks'],
//                'from_date' => ['required', 'date'],
//                'to_date' => ['required', 'date'],
//                'comment_in' => ['required'],
                'rent_id' => ['required', 'exists:rents,id'],
                'return_date' => ['required'],
                'comment_out' => ['nullable'],
                'returned' => ['boolean'],
            ];
        }

        public function authorize(): bool
        {
            return true;
        }
    }
