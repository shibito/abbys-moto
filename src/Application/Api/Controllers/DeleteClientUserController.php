<?php

    namespace Application\Api\Controllers;

    use App\Http\Controllers\Controller;
    use Application\Api\Requests\DeleteClientUserRequest;
    use Domain\ClientUsers\Actions\DeleteClientUserAction;

    class DeleteClientUserController extends Controller
    {
        public function __construct(
            public DeleteClientUserAction $deleteClientUserAction
        ) {}

        public function __invoke(
            DeleteClientUserRequest $deleteClientUserRequest
        )
        {
            $validate = $deleteClientUserRequest->validated();

            return ($this->deleteClientUserAction)($validate['client_user_id']);
        }
    }
