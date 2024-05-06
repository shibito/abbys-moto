<?php

    namespace Application\Api\Controllers;

    use App\Http\Controllers\Controller;
    use Application\Api\Requests\CreateClientUserRequest;
    use Application\Api\Resource\ClientUserResource;
    use Domain\ClientUsers\Actions\CreateClientUserAction;
    use Domain\ClientUsers\DataTransferObjects\CreateClientUserDTO;
    use Illuminate\Support\Facades\Auth;

    class CreateClientUserController extends Controller
    {
        public function __construct(
            private readonly CreateClientUserAction $createClientUserAction,
        ) {}

        public function __invoke(
            CreateClientUserRequest $createClientUserRequest
        ): array
        {
            $validated = collect($createClientUserRequest->validated())->merge(['user_id' => Auth::user()->id]);

            return ['data' => new ClientUserResource(($this->createClientUserAction)(new CreateClientUserDTO(...$validated)))];
        }
    }
