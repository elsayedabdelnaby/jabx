<?php

namespace App\Repositories\Eloquent;

use App\Models\Subscriber;
use App\Repositories\SubscriberRepositoryInterface;
use Illuminate\Support\Collection;

//use Your Model

/**
 * Class SubscriberRepository.
 */
class SubscriberRepository extends BaseRepository implements SubscriberRepositoryInterface
{
    /**
     * SubscriberRepository constructor.
     *
     * @param User $model
     */
    public function __construct(Subscriber $model)
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
