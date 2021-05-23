<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubscriberResource;
use App\Models\Subscriber;
use App\Repositories\SubscriberRepositoryInterface;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{

    private $subscriberRepository;

    /**
     *@param SubscriberRepositoryInterface
     */
    public function __construct(SubscriberRepositoryInterface $subscriberRepository)
    {
        $this->subscriberRepository = $subscriberRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = $this->subscriberRepository->all();
        return view('admin.subscribers.index', [
            'subscribers' => SubscriberResource::collection($subscribers),
            'module' => 'subscribers',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subscribers.create', [
            'module' => 'subscribers',
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
        $subscriber = new Subscriber();

        $subscriber->email = $request->email;
        $subscriber->save();

        return redirect()
            ->route('admin.subscribers.index')
            ->with('status', true)
            ->with('message', 'Subscriber Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subscriber = Subscriber::findOrFail($id);
        $subscriber->delete();
        return true;
    }
}
