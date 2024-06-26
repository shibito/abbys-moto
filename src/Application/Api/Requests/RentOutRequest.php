<?php

    namespace Application\Api\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class RentOutRequest extends FormRequest
    {
        public function rules(): array
        {
            return [
                'rent_id' => ['required', 'exists:rents,id'],
                'return_date' => ['required', 'date', 'after_or_equal:today'],
                'comment_out' => ['nullable'],
                'returned' => ['required', 'boolean'],
            ];
        }

        public function authorize(): bool
        {
            return true;
        }
    }
