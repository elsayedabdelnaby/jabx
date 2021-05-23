<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubscriberResource extends JsonResource
{

    /**
     * The Case variable.
     *
     * @var string
     */
    private $case;

    /**
     * Create a new resource instance.
     *
     * @param  mixed  $resource
     * @param string $case
     * @return void
     */
    public function __construct($resource, $case = null)
    {
        $this->resource = $resource;
        $this->case = $case;
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $sponsor = [
            'id' => $this->id,
            'email' => $this->email,
        ];
        return $sponsor;
    }
}
