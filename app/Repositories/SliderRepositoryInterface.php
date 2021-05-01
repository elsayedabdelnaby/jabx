<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
use App\Models\Slider;
//use Your Model

/**
 * Class SliderRepositoryInterface.
 */
interface SliderRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;
}
