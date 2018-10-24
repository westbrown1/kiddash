<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;
use App\User;
use Carbon\Carbon;
use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Models\Participant;
use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\Follow;
use App\Video;
use DB;


class MessagesController extends Controller
{
    /**
     * Show all of the message threads to the user.
     *
     * @return mixed
     */
    public function index()

    {
        $user = Auth::user();
       // All threads, ignore deleted/archived participants
       // $threads = Thread::getAllLatest()->get();        

        // All threads that user is participating in
        $threads = Thread::forUser(Auth::id())->latest('updated_at')->get();

        // All threads that user is participating in, with new messages
        //$threads = Thread::forUserWithNewMessages(Auth::id())->latest('updated_at')->get();

        return view('messenger.index', compact('threads'));
    }

    /**
     * Shows a message thread.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
      $member = Auth::user();

        $users1 = User::where('id', '!=', Auth::user()->id)->where('team', '=', [$member->team])->get();
        $users2 = User::where('id', '!=', Auth::user()->id)->where('team', '=', [$member->team2])->get();
        $users3 = User::where('id', '!=', Auth::user()->id)->where('team', '=', [$member->team3])->get();
        $users4 = User::where('id', '!=', Auth::user()->id)->where('team', '=', [$member->team4])->get();
        $users5 = User::where('id', '!=', Auth::user()->id)->where('team', '=', [$member->team5])->get();

        $users6 = User::where('id', '!=', Auth::user()->id)->where('team2', '=', [$member->team])->get();
        $users7 = User::where('id', '!=', Auth::user()->id)->where('team2', '=', [$member->team2])->get();
        $users8 = User::where('id', '!=', Auth::user()->id)->where('team2', '=', [$member->team3])->get();
        $users9 = User::where('id', '!=', Auth::user()->id)->where('team2', '=', [$member->team4])->get();
        $users10 = User::where('id', '!=', Auth::user()->id)->where('team2', '=', [$member->team5])->get();

        $users11 = User::where('id', '!=', Auth::user()->id)->where('team3', '=', [$member->team])->get();
        $users12 = User::where('id', '!=', Auth::user()->id)->where('team3', '=', [$member->team2])->get();
        $users13 = User::where('id', '!=', Auth::user()->id)->where('team3', '=', [$member->team3])->get();
        $users14 = User::where('id', '!=', Auth::user()->id)->where('team3', '=', [$member->team4])->get();
        $users15 = User::where('id', '!=', Auth::user()->id)->where('team3', '=', [$member->team5])->get();

        $users16 = User::where('id', '!=', Auth::user()->id)->where('team4', '=', [$member->team])->get();
        $users17 = User::where('id', '!=', Auth::user()->id)->where('team4', '=', [$member->team2])->get();
        $users18 = User::where('id', '!=', Auth::user()->id)->where('team4', '=', [$member->team3])->get();
        $users19 = User::where('id', '!=', Auth::user()->id)->where('team4', '=', [$member->team4])->get();
        $users20 = User::where('id', '!=', Auth::user()->id)->where('team4', '=', [$member->team5])->get();

        $users21 = User::where('id', '!=', Auth::user()->id)->where('team5', '=', [$member->team])->get();
        $users22 = User::where('id', '!=', Auth::user()->id)->where('team5', '=', [$member->team2])->get();
        $users23 = User::where('id', '!=', Auth::user()->id)->where('team5', '=', [$member->team3])->get();
        $users24 = User::where('id', '!=', Auth::user()->id)->where('team5', '=', [$member->team4])->get();
        $users25 = User::where('id', '!=', Auth::user()->id)->where('team5', '=', [$member->team5])->get();
        try {
            $thread = Thread::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            Session::flash('error_message', 'The thread with ID: ' . $id . ' was not found.');

            return redirect('messages');
        }

        // show current user in list if not a current participant
        // $users = User::whereNotIn('id', $thread->participantsUserIds())->get();

        // don't show the current user in list
        $userId = Auth::user()->id;
        $users = User::whereNotIn('id', $thread->participantsUserIds($userId))->get();

        $thread->markAsRead($userId);

        return view('messenger.show', compact('thread', 'users'))->withUsers($users)->withUsers1($users1)->withUsers2($users2)->withUsers3($users3)->withUsers4($users4)->withUsers5($users5)->withUsers6($users6)->withUsers7($users7)->withUsers8($users8)->withUsers9($users9)->withUsers10($users10)->withUsers11($users11)->withUsers12($users12)->withUsers13($users13)->withUsers14($users14)->withUsers15($users15)->withUsers16($users16)->withUsers17($users17)->withUsers18($users18)->withUsers19($users19)->withUsers20($users20)->withUsers21($users21)->withUsers22($users22)->withUsers23($users23)->withUsers24($users24)->withUsers25($users25)->withMember($member);
    }

    /**
     * Creates a new message thread.
     *
     * @return mixed
     */
    public function create()
    {
        $member = Auth::user();
        $users = User::all();

        $users1 = User::where('id', '!=', Auth::user()->id)->where('team', '=', [$member->team])->get();
        $users2 = User::where('id', '!=', Auth::user()->id)->where('team', '=', [$member->team2])->get();
        $users3 = User::where('id', '!=', Auth::user()->id)->where('team', '=', [$member->team3])->get();
        $users4 = User::where('id', '!=', Auth::user()->id)->where('team', '=', [$member->team4])->get();
        $users5 = User::where('id', '!=', Auth::user()->id)->where('team', '=', [$member->team5])->get();

        $users6 = User::where('id', '!=', Auth::user()->id)->where('team2', '=', [$member->team])->get();
        $users7 = User::where('id', '!=', Auth::user()->id)->where('team2', '=', [$member->team2])->get();
        $users8 = User::where('id', '!=', Auth::user()->id)->where('team2', '=', [$member->team3])->get();
        $users9 = User::where('id', '!=', Auth::user()->id)->where('team2', '=', [$member->team4])->get();
        $users10 = User::where('id', '!=', Auth::user()->id)->where('team2', '=', [$member->team5])->get();

        $users11 = User::where('id', '!=', Auth::user()->id)->where('team3', '=', [$member->team])->get();
        $users12 = User::where('id', '!=', Auth::user()->id)->where('team3', '=', [$member->team2])->get();
        $users13 = User::where('id', '!=', Auth::user()->id)->where('team3', '=', [$member->team3])->get();
        $users14 = User::where('id', '!=', Auth::user()->id)->where('team3', '=', [$member->team4])->get();
        $users15 = User::where('id', '!=', Auth::user()->id)->where('team3', '=', [$member->team5])->get();

        $users16 = User::where('id', '!=', Auth::user()->id)->where('team4', '=', [$member->team])->get();
        $users17 = User::where('id', '!=', Auth::user()->id)->where('team4', '=', [$member->team2])->get();
        $users18 = User::where('id', '!=', Auth::user()->id)->where('team4', '=', [$member->team3])->get();
        $users19 = User::where('id', '!=', Auth::user()->id)->where('team4', '=', [$member->team4])->get();
        $users20 = User::where('id', '!=', Auth::user()->id)->where('team4', '=', [$member->team5])->get();

        $users21 = User::where('id', '!=', Auth::user()->id)->where('team5', '=', [$member->team])->get();
        $users22 = User::where('id', '!=', Auth::user()->id)->where('team5', '=', [$member->team2])->get();
        $users23 = User::where('id', '!=', Auth::user()->id)->where('team5', '=', [$member->team3])->get();
        $users24 = User::where('id', '!=', Auth::user()->id)->where('team5', '=', [$member->team4])->get();
        $users25 = User::where('id', '!=', Auth::user()->id)->where('team5', '=', [$member->team5])->get();
        

        return view('messenger.create')->withUsers($users)->withUsers1($users1)->withUsers2($users2)->withUsers3($users3)->withUsers4($users4)->withUsers5($users5)->withUsers6($users6)->withUsers7($users7)->withUsers8($users8)->withUsers9($users9)->withUsers10($users10)->withUsers11($users11)->withUsers12($users12)->withUsers13($users13)->withUsers14($users14)->withUsers15($users15)->withUsers16($users16)->withUsers17($users17)->withUsers18($users18)->withUsers19($users19)->withUsers20($users20)->withUsers21($users21)->withUsers22($users22)->withUsers23($users23)->withUsers24($users24)->withUsers25($users25)->withMember($member);
    }

    /**
     * Stores a new message thread.
     *
     * @return mixed
     */
    public function store(Request $request)
    {
      $users = User::all();
      $message = New Message;
        $input = Input::all();

          if ($request->hasFile('featured_vid')) {
          $file = $request->file('featured_vid');

          $filename = time() . '.' . $file->getClientOriginalExtension();
          $location = public_path().'/images/';
          $file->move($location, $filename);
          /*Image::make($image)->resize(300, 200)->save($location);*/
          $message->vid = $filename;
          }

          if ($request->hasFile('photo')) {
          $image = $request->file('photo');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          
          Image::make($image)->resize(500, 400)->orientate()->save($location);       
          $message->photo = $filename;  

        }
        $filename = $message->photo; 

        $thread = Thread::create(
            [
                'subject' => $input['subject'],
            ]
        );

        // Message
        Message::create(
            [
                'thread_id' => $thread->id,
                'user_id'   => Auth::user()->id,
                'body'      => $input['message'],
                'photo'     => $filename,
                'vid'       => $message->vid,            
            ]
        );

        // Sender
        Participant::create(
            [
                'thread_id' => $thread->id,
                'user_id'   => Auth::user()->id,
                'last_read' => new Carbon,
            ]
        );

        // Recipients
        if (Input::has('recipients')) {
            $thread->addParticipant($input['recipients']);
        }
         
        foreach ($users as $user) {
          if (strpos($thread->participantsString(Auth::id()), $user->name) !== false) { 
            Mail::to($user->email)->send(new MessageReceived());
          }
        }        

        return redirect('messages')->withMessage($message);
    }

    /**
     * Adds a new message to a current thread.
     *
     * @param $id
     * @return mixed
     */
    public function update($id)
    {
      $member = Auth::user();
      $users = User::all();

        $users1 = User::where('id', '!=', Auth::user()->id)->where('team', '=', [$member->team])->get();
        $users2 = User::where('id', '!=', Auth::user()->id)->where('team', '=', [$member->team2])->get();
        $users3 = User::where('id', '!=', Auth::user()->id)->where('team', '=', [$member->team3])->get();
        $users4 = User::where('id', '!=', Auth::user()->id)->where('team', '=', [$member->team4])->get();
        $users5 = User::where('id', '!=', Auth::user()->id)->where('team', '=', [$member->team5])->get();

        $users6 = User::where('id', '!=', Auth::user()->id)->where('team2', '=', [$member->team])->get();
        $users7 = User::where('id', '!=', Auth::user()->id)->where('team2', '=', [$member->team2])->get();
        $users8 = User::where('id', '!=', Auth::user()->id)->where('team2', '=', [$member->team3])->get();
        $users9 = User::where('id', '!=', Auth::user()->id)->where('team2', '=', [$member->team4])->get();
        $users10 = User::where('id', '!=', Auth::user()->id)->where('team2', '=', [$member->team5])->get();

        $users11 = User::where('id', '!=', Auth::user()->id)->where('team3', '=', [$member->team])->get();
        $users12 = User::where('id', '!=', Auth::user()->id)->where('team3', '=', [$member->team2])->get();
        $users13 = User::where('id', '!=', Auth::user()->id)->where('team3', '=', [$member->team3])->get();
        $users14 = User::where('id', '!=', Auth::user()->id)->where('team3', '=', [$member->team4])->get();
        $users15 = User::where('id', '!=', Auth::user()->id)->where('team3', '=', [$member->team5])->get();

        $users16 = User::where('id', '!=', Auth::user()->id)->where('team4', '=', [$member->team])->get();
        $users17 = User::where('id', '!=', Auth::user()->id)->where('team4', '=', [$member->team2])->get();
        $users18 = User::where('id', '!=', Auth::user()->id)->where('team4', '=', [$member->team3])->get();
        $users19 = User::where('id', '!=', Auth::user()->id)->where('team4', '=', [$member->team4])->get();
        $users20 = User::where('id', '!=', Auth::user()->id)->where('team4', '=', [$member->team5])->get();

        $users21 = User::where('id', '!=', Auth::user()->id)->where('team5', '=', [$member->team])->get();
        $users22 = User::where('id', '!=', Auth::user()->id)->where('team5', '=', [$member->team2])->get();
        $users23 = User::where('id', '!=', Auth::user()->id)->where('team5', '=', [$member->team3])->get();
        $users24 = User::where('id', '!=', Auth::user()->id)->where('team5', '=', [$member->team4])->get();
        $users25 = User::where('id', '!=', Auth::user()->id)->where('team5', '=', [$member->team5])->get();

      /*$users = User::all();*/
        try {
            $thread = Thread::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            Session::flash('error_message', 'The thread with ID: ' . $id . ' was not found.');

            return redirect('messages');
        }

        $thread->activateAllParticipants();

        // Message
        Message::create(
            [
                'thread_id' => $thread->id,
                'user_id'   => Auth::id(),
                'body'      => Input::get('message'),
                'photo'     => Input::get('featured_img'),
                'vid'      => Input::get('featured_vid'),
            ]
        );

        // Add replier as a participant
        $participant = Participant::firstOrCreate(
            [
                'thread_id' => $thread->id,
                'user_id'   => Auth::user()->id,
            ]
        );
        $participant->last_read = new Carbon;
        $participant->save();

        // Recipients
        if (Input::has('recipients')) {
            $thread->addParticipant(Input::get('recipients'));
        }

        foreach ($users as $user) {
          if (strpos($thread->participantsString(Auth::id()), $user->name) !== false) { 
            Mail::to($user->email)->send(new MessageReceived());
          }
        }  

        return redirect('messages/' . $id)->withUsers($users)->withUsers1($users1)->withUsers2($users2)->withUsers3($users3)->withUsers4($users4)->withUsers5($users5)->withUsers6($users6)->withUsers7($users7)->withUsers8($users8)->withUsers9($users9)->withUsers10($users10)->withUsers11($users11)->withUsers12($users12)->withUsers13($users13)->withUsers14($users14)->withUsers15($users15)->withUsers16($users16)->withUsers17($users17)->withUsers18($users18)->withUsers19($users19)->withUsers20($users20)->withUsers21($users21)->withUsers22($users22)->withUsers23($users23)->withUsers24($users24)->withUsers25($users25)->withMember($member);
    }
}