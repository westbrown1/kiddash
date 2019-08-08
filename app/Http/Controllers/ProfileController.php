<?php

namespace App\Http\Controllers;

use App\User;
use App\Photo;
use App\Follow;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function board($username)
    {
    	$user = User::whereUsername($username)->first();
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
