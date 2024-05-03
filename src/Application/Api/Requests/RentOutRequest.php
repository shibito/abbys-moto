<?php

    namespace Application\Api\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class RentOutRequest extends FormRequest
    {
        public function rules(): array
        {
            return [
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
