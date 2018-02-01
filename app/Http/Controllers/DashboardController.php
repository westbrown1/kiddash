<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News_Feed;
use App\Dashboard;
use App\User;
use App\Picture;
use App\Task;
use App\Follow;
use App\Photo;
use App\Team;
use App\Join;
use App\Video;
use Storage;
use Auth;
use DB;

class DashboardController extends Controller
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
    public function index(Request $request)
    {          
        $user = Auth::user();
        // Get your timeline:
        $feed = \FeedManager::getNewsFeeds($request->user()->id)['timeline'];

        // Get your timeline activities from Stream:
        $activities = $feed->getActivities(0,25)['results'];

        $tasks = Task::all();
        $videos = Video::all();
        $photos = Photo::all();
        $pictures = Picture::all();
        $teams = Team::all();
        $joins = Join::all();
        $dashboards = Dashboard::all();

        return view('dashboards.index', [
            'activities' => $activities,
        ])->withUser($user)->withDashboards($dashboards)->withPhotos($photos)->withVideos($videos)->withTeams($teams)->withJoins($joins)->withPictures($pictures)->withTasks($tasks);
    }
    /**
     * Display a listing of the resource.
     *;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $user = Auth::user();
       return view('dashboards.create')->withUser($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $user_id)
    {
        $dashboards = Dashboard::all();
        $user = Auth::user();
        $dashboard = new Dashboard;
        $dashboard->name = $request->name;
        $dashboard->url = $request->url;
        $dashboard->user()->associate($user);

        $dashboard->save();
        return redirect()->route('dashboards.index', [$user->id])->withDashboard($dashboard)->withDashboards($dashboards);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dashboard = Dashboard::find($id);
        return view('dashboards.index')->withDashboard($dashboard);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
    {
        $dashboard = Dashboard::find($id);
        return view('dashboards.edit')->withDashboard($dashboard);
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
        $dashboard = Dashboard::find($id);
        $dashboard->name = $request->name;
        $dashboard->url = $request->url;

        $dashboard->save();
        return redirect()->route('dashboards.index', $dashboard->user->id);
    }

    public function photo(Request $request)
    {     
        $user = Auth::user(); 
        // Get your timeline:
        $feed = \FeedManager::getNewsFeeds($request->user()->id)['timeline'];

        // Get your timeline activities from Stream:
        $activities = $feed->getActivities(0,25)['results'];
        return view('dashboards.photo', [
            'activities' => $activities,
        ])->withUser($user);
    }

    public function dashphotos()
    {     
        $user = Auth::user(); 
        $videos = Video::all(); 
        $photos = Photo::all();
        return view('dashboards.dashphotos')->withUser($user)->withPhotos($photos)->withVideos($videos);

    }

    public function links()
    {
        $dashboards = Dashboard::all();
        $user = Auth::user();
        return view('dashboards.links')->withDashboards($dashboards)->withUser($user);
    }

    public function uploads()
    {
        $user = Auth::user();
        $photos = Photo::all();
        $videos = Video::all();
        return view('dashboards.uploads')->withUser($user)->withPhotos($photos)->withVideos($videos);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $videos = Video::all();
        $photos = Photo::all();
        $user = Auth::user();
        $dashboard = Dashboard::find($id);
        $dashboards = Dashboard::all();
        $user_id = $dashboard->user->id;
        Storage::delete('photo->image');

        $dashboard->delete();

        return redirect()->route('dashboards.links', [$user->id])->withDashboards($dashboards)->withPhotos($photos)->withVideos($videos);
    }
}