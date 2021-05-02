<?php

namespace App\Repositories\Eloquent;

use App\Models\Product;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Support\Collection;

//use Your Model

/**
 * Class ProductRepository.
 */
class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    /**
     * ProductRepository constructor.
     *
     * @param Product $model
     */
    public function __construct(Product $model)
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
    public function getAllPublishProducts(): Collection
    {
        return $this->model->where('is_publish', 1)->get();
    }
}
