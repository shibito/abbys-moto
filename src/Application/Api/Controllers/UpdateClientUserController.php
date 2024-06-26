<?php

    namespace Application\Api\Controllers;

    use App\Http\Controllers\Controller;
    use Application\Api\Requests\UpdateClientUserRequest;
    use Application\Api\Resource\ClientUserResource;
    use Domain\ClientUsers\Actions\UpdateClientUserAction;
    use Domain\ClientUsers\DataTransferObjects\UpdateClientUserDTO;

    class UpdateClientUserController extends Controller
    {
        public function __construct(
            private readonly UpdateClientUserAction $updateClientUserAction
        ) {}

        public function __invoke(
            UpdateClientUserRequest $updateClientUserRequest
        ): ClientUserResource
        {
            $validated = $updateClientUserRequest->validated();

            return new ClientUserResource(($this->updateClientUserAction)(new UpdateClientUserDTO(...$validated)));
        }
    }
