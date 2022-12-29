<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\User;
use App\Models\Author;
use App\Models\Playlist;

class UserController extends Controller
{
    public function getDonationPage(){
        return view('users.donate');
    }

    public function submitDonation(){
        return redirect()->route('dashboard');
    }
}
