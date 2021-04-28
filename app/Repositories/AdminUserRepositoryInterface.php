<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
use App\Models\AdminUser;
//use Your Model

/**
 * Class AdminRepositoryInterface.
 */
interface AdminUserRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;
}
