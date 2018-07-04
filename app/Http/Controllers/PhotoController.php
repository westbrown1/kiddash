<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\News_Feed;
use App\User;
use App\Dashboard;
use Image;
use Auth;
use Storage;
use Response;
use Illuminate\Support\Facades\Input;

class PhotoController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
       $user = Auth::user();
       return view('photos.create')->withUser($user);
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
                'image' => 'required|image',               
            ]);
        $user = Auth::user();
        $photo = new Photo;
        $photo->name = $request->name;
        $photo->user()->associate($user);

   
        if ($request->hasFile('featured_img')) {
          $image = $request->file('featured_img');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          
          Image::make($image)->resize(500, 400)->orientate()->save($location);       
          $photo->image = $filename;
        }

        $photo->save();
        return redirect()->route('dashboards.index');
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
        $photo = Photo::find($id);
        
        Storage::delete('photo->image');

        $photo->delete();

        return redirect()->route('dashboards.index', [$user->id]);
    }
}