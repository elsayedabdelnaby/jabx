<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateAdminUserPasswordRequest;
use App\Http\Requests\Admin\UpdateAdminUserRequest;
use App\Http\Resources\AdminUserResource;
use App\Repositories\AdminUserRepositoryInterface;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Spatie\Permission\Models\Role;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AdminUserController extends Controller
{
    private $adminUserRepository;
    private $roles;
    private $image_path;

    use ImageTrait;

    /**
     *@param AdminUserRepositoryInterface
     */
    public function __construct(AdminUserRepositoryInterface $adminUserRepository)
    {
        $this->adminUserRepository = $adminUserRepository;
        $this->roles = Role::all();
        $this->image_path =  public_path('uploads/images/profile_pictures') . '/';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminUsers = $this->adminUserRepository->all();
        $roles = Role::all();

        return view('admin.users.index', [
            'users' => AdminUserResource::collection($adminUsers),
            'roles' => $roles,
            'module' => 'users',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function show(AdminUser $adminUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adminUser = $this->adminUserRepository->find($id);
        return view('admin.users.edit', [
            'admin_user' => $adminUser,
            'roles' => $this->roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminUserRequest $request, $id)
    {
        $adminUser = $this->adminUserRepository->find($id);
        $file_name = $adminUser->profile_picture;

        $file = $this->verifyAndUpload($request, 'profile_picture', $this->image_path, $file_name);
        if(!is_null($file)){
            $file_name = $file;
        }

        $adminUser->name = $request->name;
        $adminUser->email = $request->email;
        $adminUser->role_id = $request->role;
        $adminUser->profile_picture = $file_name;

        $adminUser->save();

        return redirect()
            ->route('admin.users.edit', $adminUser)
            ->with('status', true)
            ->with('message', 'User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminUser $adminUser)
    {
        //
    }

    /**
     * Update the specified user password in db.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function changePassword(UpdateAdminUserPasswordRequest $request, $id)
    {
        $adminUser = $this->adminUserRepository->find($id);

        if (Crypt::decrypt($adminUser->password) == $request->current_password) {
            $adminUser->password = Crypt::encrypt($request->new_password);
            $adminUser->save();
            return redirect()
                ->route('admin.users.edit', $adminUser)
                ->with('status', true)
                ->with('message', 'Password Changed Successfully');
        }

        return redirect()
            ->route('admin.users.edit', $adminUser)
            ->with('status', false)
            ->with('message', 'Current Password Incorrect')
            ->with('current_tab', 'change_password');
    }

    public function uploadImage(UploadedFile $image, $path)
    {

    }
}
