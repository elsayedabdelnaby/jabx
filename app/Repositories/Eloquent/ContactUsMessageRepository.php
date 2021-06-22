<?php

namespace App\Repositories\Eloquent;

use App\Models\ContactUsMessage;
use App\Repositories\ContactUsMessageRepositoryInterface;
use Illuminate\Support\Collection;

//use Your Model

/**
 * Class ContactUsMessageRepository.
 */
class ContactUsMessageRepository extends BaseRepository implements ContactUsMessageRepositoryInterface
{
    /**
     * ContactUsMessageRepository constructor.
     *
     * @param ContactUsMessage $model
     */
    public function __construct(ContactUsMessage $model)
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
