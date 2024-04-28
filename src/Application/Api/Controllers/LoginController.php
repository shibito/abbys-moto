<?php

namespace Application\Api\Controllers;

use App\Http\Controllers\Controller;
use Application\Api\Requests\LoginRequest;
use Domain\Users\Actions\LoginAction;
use Domain\Users\DataTransferObjects\LoginDataTransferObject;

class LoginController extends Controller
{
    public function __construct(
        private readonly LoginAction $loginAction
    )
    {}

    public function __invoke(
        LoginRequest $loginRequest
    )
    {
        $data = new LoginDataTransferObject(...$loginRequest->validated());

        return ($this->loginAction)($data);
    }
}
