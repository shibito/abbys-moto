<?php

    namespace Application\Api\Controllers;

    use App\Http\Controllers\Controller;
    use Domain\ClientUsers\Actions\GetClientUserAction;

    class GetClientUserController extends Controller
    {
        public function __construct(
            private readonly GetClientUserAction $getClientUserAction
        ) {}

        public function __invoke()
        {
            return ($this->getClientUserAction)();
        }
    }
