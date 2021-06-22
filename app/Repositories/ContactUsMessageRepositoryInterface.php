<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
//use Your Model

/**
 * Class ContactUsMessageRepositoryInterface.
 */
interface ContactUsMessageRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;
}
