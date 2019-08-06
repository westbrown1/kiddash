<?php

namespace App\Http\Controllers;

use App\User;
use App\Photo;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($membername)
    {
    	$user = User::whereMembername($membername)->first();
        $photos= Photo::all();

    	if($user) {
    		//User exists
    		return view('profile')->withUser($user)->withPhotos($photos);
    	} else {
    		//User does not exist
    		dd($user);
    	}
    }
}
