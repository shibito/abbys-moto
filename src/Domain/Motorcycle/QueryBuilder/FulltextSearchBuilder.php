<?php

    namespace Domain\Motorcycle\QueryBuilder;

    use Illuminate\Database\Eloquent\Builder;

    class FulltextSearchBuilder extends Builder
    {
        public function search(?string $term = null): self
        {
            return $term ? $this->whereFullText(['make', 'model', 'year', 'type', 'displacement', 'engine', 'power', 'torque', 'ignition', 'gearbox', 'transmission', 'clutch', 'wheelbase', 'emission', 'fuel_system', 'cooling'], $term) : $this;
        }
    }
