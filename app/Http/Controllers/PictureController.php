<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Picture;
use App\Dashboard;
use App\Task;
use Auth;
use Storage;
use Session;
use Image;


class PictureController extends Controller
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
        return view('pictures.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        return view('pictures.create')->withUser($user);
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
        $picture = new Picture;
        $picture->user()->associate($user); 
        $picture->name = $request->name;     

        if ($request->hasFile('picture')) {
          $image = $request->file('picture');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path().'/images/';
          $image->move($location, $filename);
          /*Image::make($picture)->resize(300, 200)->save($location);*/       
          $picture->picture = $filename;          
        }
        
        $picture->save();

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
        $user = Auth::user();
        $picture = Picture::find($id);
        return view('pictures.show')->withPicture($picture)->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $picture = Picture::find($id);
        return view('pictures.edit')->withPicture($picture);
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
        $user = Auth::user();
        $picture = Picture::find($id);

       if ($request->hasFile('picture')) {
            // add the new photo
          $image = $request->file('picture');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path().('/images/');
          $image->move($location, $filename);
          /*Image::make($image)->resize(800, 400)->save($location);*/
          $oldFilename = $picture->picture;
          // update the database
          $picture->picture = $filename;
         
          // Delete the old photo
          Storage::delete($oldFilename);
        }

        // Save the data to the database
        $picture->save();

        $picture = Picture::find($id);

        $picture->name = $request->input('name');

        $picture->save();

        return redirect()->route('dashboards.index', $picture->id);
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
        $picture = Picture::find($id);

        Storage::delete('picture->picture');
        $picture->delete();

        return redirect()->route('dashboards.index', [$user->id]);
    }
}