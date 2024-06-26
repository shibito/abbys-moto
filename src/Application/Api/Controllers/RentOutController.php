<?php

    namespace Application\Api\Controllers;

    use App\Http\Controllers\Controller;
    use Application\Api\Requests\RentOutRequest;
    use Application\Api\Resource\RentResource;
    use Domain\Rents\Actions\RentOutAction;
    use Domain\Rents\DataTransferObjects\RentOutDTO;

    class RentOutController extends Controller
    {
        public function __construct(
           public RentOutAction $rentOutAction
        ) {}

        public function __invoke(
            RentOutRequest $rentOutRequest
        ): RentResource
        {
            $validated = $rentOutRequest->validated();

            return new RentResource(($this->rentOutAction)(new RentOutDTO(...$validated)));
        }
    }
