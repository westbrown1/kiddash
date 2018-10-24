<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Join;
use Image;
use App\Follow;
use Auth;
use DB;
use App\Repositories\UserRepository;

class FollowController extends Controller
{
    /**
     * The user repository instance.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * Create a new controller instance.
     *
     * @param  UserRepository  $users
     */
    public function __construct(UserRepository $users)
    {
        $this->middleware('auth');
        $this->users = $users;
    }


    /**
     * Create a new task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {    

        $this->validate($request, [
            'follow_id' => 'required|max:255',
        ]);

        $request->user()->follows()->create([
            'follow_id' => $request->follow_id,
        ]);        

        \FeedManager::followUser($request->user()->id, $request->follow_id);

        return redirect('/users');                
    }

    public function show($id)
    {
        $follow = Follow::find($id);

        return redirect()->route('joins.index')->withFollow($follow);
    }

    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Follow $follow
     * @return Response
     */
    public function destroy(Request $request, Follow $follow)
    {
        
        $this->authorize('destroy', $follow);
        $follow->delete();

        \FeedManager::unfollowUser($request->user()->id, $follow->follow_id);

        return redirect('/users');
    }

    /**
     * Display a list of all users in system - divided by .
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request, Follow $follow)
    {
        $member = Auth::user();

        $users1 = DB::table('users')->where('team', [$member->team])->get();
        $users2 = DB::table('users')->where('team', [$member->team2])->get();
        $users3 = DB::table('users')->where('team', [$member->team3])->get();
        $users4 = DB::table('users')->where('team', [$member->team4])->get();
        $users5 = DB::table('users')->where('team', [$member->team5])->get();

        $users6 = DB::table('users')->where('team2', [$member->team])->get();
        $users7 = DB::table('users')->where('team2', [$member->team2])->get();
        $users8 = DB::table('users')->where('team2', [$member->team3])->get();
        $users9 = DB::table('users')->where('team2', [$member->team4])->get();
        $users10 = DB::table('users')->where('team2', [$member->team5])->get();

        $users11 = DB::table('users')->where('team3', [$member->team])->get();
        $users12 = DB::table('users')->where('team3', [$member->team2])->get();
        $users13 = DB::table('users')->where('team3', [$member->team3])->get();
        $users14 = DB::table('users')->where('team3', [$member->team4])->get();
        $users15 = DB::table('users')->where('team3', [$member->team5])->get();

        $users16 = DB::table('users')->where('team4', [$member->team])->get();
        $users17 = DB::table('users')->where('team4', [$member->team2])->get();
        $users18 = DB::table('users')->where('team4', [$member->team3])->get();
        $users19 = DB::table('users')->where('team4', [$member->team4])->get();
        $users20 = DB::table('users')->where('team4', [$member->team5])->get(); 

        $users21 = DB::table('users')->where('team5', [$member->team])->get();
        $users22 = DB::table('users')->where('team5', [$member->team2])->get();
        $users23 = DB::table('users')->where('team5', [$member->team3])->get();
        $users24 = DB::table('users')->where('team5', [$member->team4])->get();
        $users25 = DB::table('users')->where('team5', [$member->team5])->get();
                       

        return view('users.index', [
            'users' => $this->users->forUser($request->user()),
        ])->withUsers1($users1)->withUsers2($users2)->withUsers3($users3)->withUsers4($users4)->withUsers5($users5)->withUsers6($users6)->withUsers7($users7)->withUsers8($users8)->withUsers9($users9)->withUsers10($users10)->withUsers11($users11)->withUsers12($users12)->withUsers13($users13)->withUsers14($users14)->withUsers15($users15)->withUsers16($users16)->withUsers17($users17)->withUsers18($users18)->withUsers19($users19)->withUsers20($users20)->withUsers21($users21)->withUsers22($users22)->withUsers23($users23)->withUsers24($users24)->withUsers25($users25)->withMember($member);
        
    }
}


