<?php

namespace App\Repositories\Eloquent;

use App\Models\TeamMember;
use App\Repositories\TeamMemberRepositoryInterface;
use Illuminate\Support\Collection;

//use Your Model

/**
 * Class TeamMemberRepository.
 */
class TeamMemberRepository extends BaseRepository implements TeamMemberRepositoryInterface
{
    /**
     * ProductRepository constructor.
     *
     * @param Product $model
     */
    public function __construct(TeamMember $model)
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
