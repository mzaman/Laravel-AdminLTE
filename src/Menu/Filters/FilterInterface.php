<?php

namespace MasudZaman\LaravelAdminLte\Menu\Filters;

use MasudZaman\LaravelAdminLte\Menu\Builder;

interface FilterInterface
{
    public function transform($item, Builder $builder);
}
