<?php

namespace App\Repositories\Eloquent;

use App\Models\AdminUser;
use App\Repositories\AdminUserRepositoryInterface;
use Illuminate\Support\Collection;

//use Your Model

/**
 * Class AdminUserRepository.
 */
class AdminUserRepository extends BaseRepository implements AdminUserRepositoryInterface
{
    /**
     * AdminUserRepository constructor.
     *
     * @param User $model
     */
    public function __construct(AdminUser $model)
    {
        parent::__construct($model);
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }
}
