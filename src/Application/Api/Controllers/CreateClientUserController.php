<?php

    namespace Application\Api\Controllers;

    use App\Http\Controllers\Controller;
    use Application\Api\Requests\CreateClientUserRequest;
    use Domain\ClientUsers\Actions\CreateClientUserAction;
    use Domain\ClientUsers\DataTransferObjects\CreateClientUserDTO;
    use Domain\ClientUsers\Models\ClientUser;

    class CreateClientUserController extends Controller
    {
        public function __construct(
            public CreateClientUserAction $createClientUserAction,
        ) {}

        public function __invoke(CreateClientUserRequest $createClientUserRequest): ClientUser
        {
            $request = $createClientUserRequest->validated();

            return ($this->createClientUserAction)(new CreateClientUserDTO(...$request));
        }
    }
