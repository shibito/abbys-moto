<?php

    namespace Application\Api\Controllers;

    use App\Http\Controllers\Controller;
    use Application\Api\Requests\DeleteClientUserRequest;
    use Domain\ClientUsers\Actions\DeleteClientUserAction;

    class DeleteClientUserController extends Controller
    {
        public function __construct(
            private readonly DeleteClientUserAction $deleteClientUserAction
        ) {}

        public function __invoke(
            DeleteClientUserRequest $deleteClientUserRequest
        )
        {
            $validated = $deleteClientUserRequest->validated();

            return ($this->deleteClientUserAction)($validated['client_user_id']);
        }
    }
