<?php

    namespace Application\Api\Controllers;

    use App\Http\Controllers\Controller;
    use Application\Api\Requests\RentInRequest;
    use Application\Api\Resource\RentResource;
    use Domain\Rents\Actions\RentInAction;
    use Domain\Rents\DataTransferObjects\RentInDTO;

    class RentInController extends Controller
    {
        public function __construct(
            private readonly RentInAction $rentInAction
        ) {}

        public function __invoke(
            RentInRequest $rentInRequest
        ): RentResource
        {
            $validated = $rentInRequest->validated();

            return new RentResource(($this->rentInAction)(new RentInDTO(...$validated)));
        }
    }
