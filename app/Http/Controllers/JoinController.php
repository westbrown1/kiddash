<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Follow;
use App\Join;
use App\Team;
use App\User;
use Auth;
use DB;
use App\Repositories\UserRepository;


class JoinController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Auth::user();

        /*$users = User::where('team', '=', Auth::user()->team)->get();*/   //Eloquent

        $users = DB::table('users')->where('team', [$member->team])->get();
        $users2 = DB::table('users')->where('team', [$member->team2])->get();
        $users3 = DB::table('users')->where('team', [$member->team3])->get();

        $users4 = DB::table('users')->where('team2', [$member->team])->get();
        $users5 = DB::table('users')->where('team2', [$member->team2])->get();
        $users6 = DB::table('users')->where('team2', [$member->team3])->get();

        $users7 = DB::table('users')->where('team3', [$member->team])->get();
        $users8 = DB::table('users')->where('team3', [$member->team2])->get();
        $users9 = DB::table('users')->where('team3', [$member->team3])->get();

        return view('joins.index')->withUsers($users)->withUsers2($users2)->withUsers3($users3)->withUsers4($users4)->withUsers5($users5)->withUsers6($users6)->withUsers7($users7)->withUsers8($users8)->withUsers9($users9)->withMember($member);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $teams = Team::all();
        return view('joins.create')->withUser($user)->withTeams($teams);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $user_id)
    {
        $user = Auth::user();
 
        $join = new Join;

        $result = value($request->team);

        $join->name = $request->name;
        $join->team = $request->team;

        if(empty($user->team))
        $user->team = $request->team;
        elseif(empty($user->team2))
        $user->team2 = $request->team;
        else
        $user->team3 = $request->team;

        $join->user_id = $request->user_id;

        $join->save();

        $user->save();

        return redirect()->route('dashboards.index')->withJoin($join);        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
        $join = Join::find($id);

        $join->delete();

        if($join->team == $user->team)
        $user->team = null;

        if($join->team == $user->team2)
        $user->team2 = null;

        if($join->team == $user->team3)
        $user->team3 = null;

        $user->save();

        return redirect()->route('dashboards.index', [$user->id]);
    }
}