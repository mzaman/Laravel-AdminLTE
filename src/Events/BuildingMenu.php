<?php

namespace MasudZaman\LaravelAdminLte\Events;

use MasudZaman\LaravelAdminLte\Menu\Builder;

class BuildingMenu
{
    public $menu;

    public function __construct(Builder $menu)
    {
        $this->menu = $menu;
    }
}
