<?php

namespace App\Repositories\Eloquent;

use App\Models\Slider;
use App\Repositories\SliderRepositoryInterface;
use Illuminate\Support\Collection;

//use Your Model

/**
 * Class SliderRepository.
 */
class SliderRepository extends BaseRepository implements SliderRepositoryInterface
{
    /**
     * SliderRepository constructor.
     *
     * @param User $model
     */
    public function __construct(Slider $model)
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

    /**
     * @return Collection
     */
    public function getAllActiveSliders(): Collection
    {
        return $this->model->where('is_active', 1)->get();
    }
}
