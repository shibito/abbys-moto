<?php

    namespace Application\Api\Controllers;

    use App\Http\Controllers\Controller;
    use Application\Api\Requests\UpdateClientUserRequest;
    use Domain\ClientUsers\Actions\UpdateClientUserAction;
    use Domain\ClientUsers\DataTransferObjects\UpdateClientUserDTO;

    class UpdateClientUserController extends Controller
    {
        public function __construct(
            public UpdateClientUserAction $updateClientUserAction
        ) {}

        public function __invoke(
            UpdateClientUserRequest $updateClientUserRequest
        )
        {
            $request = $updateClientUserRequest->validated();

            return ($this->updateClientUserAction)(new UpdateClientUserDTO(...$request));
        }
    }
