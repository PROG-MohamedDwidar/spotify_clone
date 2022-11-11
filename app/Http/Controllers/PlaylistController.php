<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\User;
use App\Models\Author;
use App\Models\Playlist;

class PlaylistController extends Controller
{
    public function index(){
        return view('playlists.index');
    }
}
