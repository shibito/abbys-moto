<?php

    namespace Application\Api\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class CreateClientUserRequest extends FormRequest
    {
        public function rules(): array
        {
            return [
                'firstname' => ['required'],
                'lastname' => ['required'],
                'user_id' => ['required', 'exists:users,id'],
            ];
        }

        public function authorize(): bool
        {
            return true;
        }
    }
