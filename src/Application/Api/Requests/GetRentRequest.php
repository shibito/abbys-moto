<?php

    namespace Application\Api\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class GetRentRequest extends FormRequest
    {
        public function rules(): array
        {
            return [
                'returnd' => 'boolean|nullable'
            ];
        }

        public function authorize(): bool
        {
            return true;
        }
    }
