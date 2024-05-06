<?php

    namespace Domain\Rents\QueryBuilders;


    use Illuminate\Database\Eloquent\Builder;

    class RentQueryBuilder extends Builder
    {
        public function returned(?bool $returned = null): self
        {
            return $returned !== null ? $this->where('returned', $returned) : $this;
        }
    }
