<?php

    namespace Domain\Motorcycle\QueryBuilder;

    use Illuminate\Database\Eloquent\Builder;

    class MotorcycleStockBuilder extends Builder
    {
        public function rented(?bool $rented = null): self
        {
            return $rented !== null
                ? ($rented ? $this->has('rented') : $this->doesntHave('rented'))
                : $this;
        }
    }
