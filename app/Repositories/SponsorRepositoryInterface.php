<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
use App\Models\Sponsor;
//use Your Model

/**
 * Class AdminRepositoryInterface.
 */
interface SponsorRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;
}
