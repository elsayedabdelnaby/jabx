<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeamMemberResource;
use App\Models\TeamMember;
use App\Repositories\TeamMemberRepositoryInterface;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use File;

class TeamMemberController extends Controller
{
    private $teamMemberRepository;
    private $image_path;

    use ImageTrait;

    /**
     *@param TeamMemberRepositoryInterface
     */
    public function __construct(TeamMemberRepositoryInterface $teamMemberRepository)
    {
        $this->teamMemberRepository = $teamMemberRepository;
        $this->image_path =  public_path('uploads/images/team_members') . '/';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team_members = $this->teamMemberRepository->all();
        return view('admin.team_members.index', [
            'team_members' => TeamMemberResource::collection($team_members),
            'module' => 'team-members',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team_members.create', [
            'module' => 'Team Members'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team_member = new TeamMember();
        $team_member->name = $request->name;
        $team_member->title = $request->title;
        $team_member->breif = $request->brief;
        $team_member->instagram_link = $request->instagram_link;
        $team_member->twitter_link = $request->twitter_link;
        $team_member->linkedin_link = $request->linkedin_link;
        $team_member->facebook_link = $request->facebook_link;

        $image_name = '';
        $image_file = $this->verifyAndUpload($request, 'image', $this->image_path, $image_name);

        if (!is_null($image_file)) {
            $image_name = $image_file;
        }

        $team_member->image = $image_name;

        $team_member->save();

        return redirect()
            ->route('admin.team-members.index')
            ->with('status', true)
            ->with('message', 'Team Member Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team_member = TeamMember::findOrFail($id);
        return view('admin.team_members.edit', [
            'team_member' => $team_member,
            'module' => 'Team Members',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $team_member = TeamMember::findOrFail($id);
        $team_member->name = $request->name;
        $team_member->title = $request->title;
        $team_member->breif = $request->brief;
        $team_member->instagram_link = $request->instagram_link;
        $team_member->twitter_link = $request->twitter_link;
        $team_member->linkedin_link = $request->linkedin_link;
        $team_member->facebook_link = $request->facebook_link;

        $image_name = $team_member->image;
        $image_file = $this->verifyAndUpload($request, 'team_member_image', $this->image_path, $image_name);

        if (!is_null($image_file)) {
            $image_name = $image_file;
        }

        $team_member->image = $image_name;

        $team_member->save();

        return redirect()
            ->route('admin.team-members.edit', $team_member)
            ->with('status', true)
            ->with('message', 'Team Member Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team_member = TeamMember::findOrFail($id);
        File::delete($this->image_path . $team_member->image);
        $team_member->delete();
        return true;
    }
}
