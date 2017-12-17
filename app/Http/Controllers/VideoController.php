<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Auth;
use App\Dashboard;
use App\Video;
use App\User;

class VideoController extends Controller
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

	public function index()
	{

	}

	public function store(Request $request, $user_id)
	{
		$user = Auth::user();
		$video = new Video;
		$video->name = $request->name;
		$video->user()->associate($user);

		        if ($request->hasFile('file')) {
		        	$file = $request->file('file');
		        	$filename = time() . '.' . $file->getClientOriginalExtension();
		        	$location = public_path().'/images/';
		        	$file->move($location, $filename);

		        	$video->file = $filename;

		        }
		$video->save();
		return redirect()->route('dashboards.index', [$user->id])->withVideo($video);
	}

	public function show($id)
	{

	}

	public function create()
	{
       $user = Auth::user();
       return view('videos.create')->withUser($user);
	}

	public function destroy($id)
    {
        $user = Auth::user();
        $video = Video::find($id);
        Storage::delete('video->file');

        $video->delete();

        return redirect()->route('dashboards.index', [$user->id]);
    }
}

