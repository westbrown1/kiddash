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
        $user = Auth::user();

        /*$users = User::where('team', '=', Auth::user()->team)->get();*/   //Eloquent

        $users = DB::table('users')->whereIn('team', [Auth::user()->team])->get();   //Query Builder
        return view('joins.index')->withUsers($users)->withUser($user);
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
        $user->team = $result . ', ' . $user->team;
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

        return redirect()->route('dashboards.index', [$user->id]);
    }
}