<?php

namespace App\Admin\Controllers;

use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;
use Nicelizhi\Admin\Facades\Admin;
use Carbon\Carbon;
use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Models\Participant;
use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Nicelizhi\Admin\Auth\Database\Administrator;
use Nicelizhi\Admin\Layout\Column;
use Nicelizhi\Admin\Layout\Content;

class MessagesController extends Controller {
/**
     * Show all of the message threads to the user.
     *
     * @return mixed
     */
    public function index(Content $content)
    {
        // All threads, ignore deleted/archived participants
        //$threads = Thread::getAllLatest()->get();

        // All threads that user is participating in
        $threads = Thread::forUser(Auth::id())->latest('updated_at')->get();

        // All threads that user is participating in, with new messages
        $threads = Thread::forUserWithNewMessages(Auth::id())->latest('updated_at')->get();

        return $content->title("消息中心")->view('admin.messenger.index', compact('threads'));
    }

    /**
     * Shows a message thread.
     *
     * @param $id
     * @return mixed
     */
    public function show($id, Content $content)
    {
        try {
            $thread = Thread::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            Session::flash('error_message', 'The thread with ID: ' . $id . ' was not found.');

            return redirect()->route('admin.messages');
        }

        // show current user in list if not a current participant
        // $users = User::whereNotIn('id', $thread->participantsUserIds())->get();

        // don't show the current user in list
        $userId = Auth::id();
        $users = Administrator::whereNotIn('id', $thread->participantsUserIds($userId))->get();
        //$users = User::whereNotIn('id', $thread->participantsUserIds())->get();
        //var_dump($users);exit;

        $thread->markAsRead($userId);

        return $content->title("消息展示")->view('admin.messenger.show', compact('thread', 'users'));
    }

    /**
     * Creates a new message thread.
     *
     * @return mixed
     */
    public function create(Content $content)
    {

        //$users = Administrator::where('id', '!=', Auth::id())->get();
        $users = Administrator::where("org_id", Admin::user()->org_id)->get();

        return $content->title("消息创建")->view('admin.messenger.create', compact('users'));
    }

    /**
     * Stores a new message thread.
     *
     * @return mixed
     */
    public function store()
    {
        $input = Request::all();

        $thread = Thread::create([
            'subject' => $input['subject'],
        ]);

        // Message
        Message::create([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),
            'body' => $input['message'],
        ]);

        // Sender
        Participant::create([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),
            'last_read' => new Carbon(),
        ]);

        // Recipients
        if (Request::has('recipients')) {
            $thread->addParticipant($input['recipients']);
        }

        return redirect()->route('admin.messages');
    }

    /**
     * Adds a new message to a current thread.
     *
     * @param $id
     * @return mixed
     */
    public function update($id)
    {
        try {
            $thread = Thread::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            Session::flash('error_message', 'The thread with ID: ' . $id . ' was not found.');

            return redirect()->route('admin.messages');
        }

        $thread->activateAllParticipants();

        // Message
        Message::create([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),
            'body' => Request::input('message'),
        ]);

        // Add replier as a participant
        $participant = Participant::firstOrCreate([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),
        ]);
        $participant->last_read = new Carbon();
        $participant->save();

        // Recipients
        if (Request::has('recipients')) {
            $thread->addParticipant(Request::input('recipients'));
        }

        return redirect()->route('admin.messages.show', $id);
    }
}