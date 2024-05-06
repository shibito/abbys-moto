<?php

    namespace Application\Api\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class CreateClientUserRequest extends FormRequest
    {
        public function rules(): array
        {
            return [
                'firstname' => ['string|required'],
                'lastname' => ['string|required'],
                'address' => ['string|nullable'],
                'phone1' => ['string|nullable'],
                'phone2' => ['string|nullable'],
            ];
        }

        public function authorize(): bool
        {
            return true;
        }
    }
