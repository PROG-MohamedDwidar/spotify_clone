<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\User;
use App\Models\Donation;
use App\Models\Author;
use App\Models\Playlist;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getDonationPage(){
        return view('users.donate');
    }

    public function submitDonation(Request $request){
        $donation = Donation::create([
            'amount' =>$request['amount'] ,
            'user_id' => Auth::id(),
        ]);
        //$donation->donor=Auth::user();
        return redirect()->route('dashboard');
    }
    public function getDonors(){
        $donations=Donation::all();
        return view('users.donors')->with(['donations'=>$donations ]);
    }
}
