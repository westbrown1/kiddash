<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\User;
use Auth;

class TeamController extends Controller
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
        $teams = Team::all();

        return view('teams.index')->withUser($user)->withTeams($teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('teams.create')->withUser($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $user_id)
    {
        $this->validate($request, [
                'name' => 'required|unique:teams,name|max:255',
                'city' => 'required|max:255',                
            ]);

        $user = Auth::user();
        $team = new Team;

        $team->name = $request->name;
        $team->city = $request->city;
        $team->state = $request->state;
        $team->country = $request->country;
        $team->sport = $request->sport;
        $team->user_id = $request->user_id;

        $team->save();

        return redirect()->route('joins.country')->withUser($user)->withTeam($team);
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
        //
    }

        /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.unique:teams,name' => 'This team name has been taken',
        ];
    }
}