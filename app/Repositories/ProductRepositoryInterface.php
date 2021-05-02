<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
use App\Models\Product;
//use Your Model

/**
 * Class ProductRepositoryInterface.
 */
interface ProductRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;
}
