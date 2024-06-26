<?php

    namespace Application\Api\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class GetMotorcycleRequest extends FormRequest
    {
        public function rules(): array
        {
            return [
                'search' => 'string|nullable',
                'stock' => 'bool|nullable',
            ];
        }

        public function authorize(): bool
        {
            return true;
        }
    }
