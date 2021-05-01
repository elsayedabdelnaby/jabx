<?php

namespace App\Repositories\Eloquent;

use App\Models\Sponsor;
use App\Repositories\SponsorRepositoryInterface;
use Illuminate\Support\Collection;

//use Your Model

/**
 * Class SponsorRepository.
 */
class SponsorRepository extends BaseRepository implements SponsorRepositoryInterface
{
    /**
     * SponsorRepository constructor.
     *
     * @param User $model
     */
    public function __construct(Sponsor $model)
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
