<?php

    namespace Application\Api\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class UpdateClientUserRequest extends FormRequest
    {
        public function rules(): array
        {
            return [
                'firstname' => ['required'],
                'lastname' => ['required'],
                'client_user_id' => ['required', 'exists:client_users,id'],
            ];
        }

        public function authorize(): bool
        {
            return true;
        }
    }
