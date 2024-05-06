<?php

    namespace Application\Api\Controllers;

    use App\Http\Controllers\Controller;
    use Application\Api\Requests\GetRentRequest;
    use Domain\Rents\Actions\GetRentAction;

    class GetRentController extends Controller
    {
        public function __construct(
            private readonly GetRentAction $getRentAction
        ) {}

        public function __invoke(
            GetRentRequest $getRentRequest
        )
        {
            return ($this->getRentAction)($getRentRequest->validated()['returned'] ?? null);
        }
    }
