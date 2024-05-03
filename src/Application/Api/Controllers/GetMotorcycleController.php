<?php

    namespace Application\Api\Controllers;

    use App\Http\Controllers\Controller;
    use Application\Api\Collections\MotorcycleCollection;
    use Application\Api\Requests\GetMotorcycleRequest;
    use Domain\Motorcycle\Actions\GetMotorcycleAction;
    use Domain\Motorcycle\Models\Motorcycle;

    class GetMotorcycleController extends Controller
    {
        public function __construct(
            private readonly GetMotorcycleAction $getMotorcycleAction
        ) {}

        public function __invoke(GetMotorcycleRequest $request): MotorcycleCollection
        {
            $search = $request->validated()['search'] ?? null;

            return ($this->getMotorcycleAction)($search);
        }
    }
