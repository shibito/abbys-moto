<?php

namespace Application\Api\Controllers;

use App\Http\Controllers\Controller;
use Domain\Users\Actions\LogoutAction;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function __construct(
        private readonly LogoutAction $logoutAction
    )
    {}

    public function __invoke(
        Request $request
    )
    {
        return ($this->logoutAction)($request);
    }
}
