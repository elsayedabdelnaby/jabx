<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
//use Your Model

/**
 * Class SubscriberRepositoryInterface.
 */
interface SubscriberRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;
}
