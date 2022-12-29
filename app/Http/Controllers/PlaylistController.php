<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Token;
use App\Models\User;
use App\Http\Controllers\SpotifyAPI;
use App\Models\Author;
use App\Models\Playlist;
use GuzzleHttp\Client;

class PlaylistController extends Controller
{
    public function index(){
        return view('playlists.index');
    }

    public function dashboard(Request $request){
        //dump($request);
        if(Token::exists()){
            $playlists=SpotifyAPI::getFeatured()['playlists']['items'];
           
            return view('dashboard') ->with([
                'playlists' => $playlists,
        ]);
        }
        else if ($request->has('code')) {
            SpotifyAPI::getToken($request->input('code'));
            return redirect()->route('dashboard');
        }
        else{
            $res=SpotifyAPI::getCode();
            return redirect($res);
        }
        
        
    }


   

    public function test(Request $request){
        dd($request);
    }
}
