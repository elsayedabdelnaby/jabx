<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
//use Your Model

/**
 * Class TeamMemberRepositoryInterface.
 */
interface TeamMemberRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;
}
