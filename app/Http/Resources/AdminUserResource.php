<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminUserResource extends JsonResource
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
        $admin_user =  [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'role_id' => $this->role_id,
            'role' => ucfirst($this->role->name),
            'is_active' => $this->is_active
        ];

        switch ($this->case) {
            case 'create':
                $admin_user['created_at'] = $this->created_at;
                $admin_user['created_by'] = $this->created_by;
                break;

            case 'update':
                $admin_user['updated_at'] = $this->updated_at;
                $admin_user['updated_by'] = $this->updated_by;
                break;

            case 'delete':
                $admin_user['deleted_at'] = $this->deleted_at;
                $admin_user['deleted_by'] = $this->deleted_by;
                break;

            default:
                $admin_user['created_at'] = $this->created_at;
                $admin_user['created_by'] = $this->created_by;
                $admin_user['updated_at'] = $this->updated_at;
                $admin_user['updated_by'] = $this->updated_by;
                break;
        }

        return $admin_user;
    }
}
