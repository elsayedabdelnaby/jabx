<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ContactUsMessageResource;
use App\Models\ContactUsMessage;
use App\Repositories\ContactUsMessageRepositoryInterface;
use Illuminate\Http\Request;

class ContactUsMessageController extends Controller
{
    private $contactusMessageRepository;

    public function __construct(ContactUsMessageRepositoryInterface $contactusMessageRepository)
    {
        $this->contactusMessageRepository = $contactusMessageRepository;
    }

    public function index()
    {
        $contact_us_msgs = $this->contactusMessageRepository->all();

        return view('admin.contactus_messages.index', [
            'contact_us_msgs' => ContactUsMessageResource::collection($contact_us_msgs),
            'module' => 'Contact Us Messages',
        ]);
    }

    public function edit($id){
        $contact_us_msg = ContactUsMessage::findOrFail($id);
        return view('admin.contactus_messages.edit', [
            'contact_us_msg' => $contact_us_msg,
            'module' => 'Contact Us Messages',
        ]);
    }

    public function update(Request $request, $id){
        $contact_us_msg = ContactUsMessage::findOrFail($id);
        $contact_us_msg->status = $request->get('status');
        $contact_us_msg->update();
        return redirect()
            ->route('admin.contactus-messages.edit', $contact_us_msg)
            ->with('status', true)
            ->with('message', 'Updated Successfully');
    }
}
