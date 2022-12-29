<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\TransferStats;
use App\Models\Token;
class SpotifyAPI extends Controller
{

    
    public static function storeToken($token,$refresh_token){
        $token_instance=new Token;
        $token_instance->token=$token;
        $token_instance->refresh_token=$refresh_token;
        $token_instance->save();
    }


    public static function getCode(){
        $options=array(
            'query' => [
                'client_id' => 'ae105fcacc7748baba4184b0d6e58dc0',
                'response_type'=>'code',
                'redirect_uri'=>'http://127.0.0.1:8000/dashboard'
            ],
            'on_stats' => function (TransferStats $stats) use (&$url) {
                $url = $stats->getEffectiveUri();
            },);
        $client = new Client();
        $request=$client->request('GET', 'https://accounts.spotify.com/authorize',$options)->getBody()->getContents();
        //dd($url);
        return $url;
    }


    public static function getToken($clientCode){
        $token=Http::asForm()->withHeaders([
            'Authorization'=>'Basic YWUxMDVmY2FjYzc3NDhiYWJhNDE4NGIwZDZlNThkYzA6OTY1YmQ5NjZmYjM5NGM2NzlmODkzNjkzMmQ5NWEwZTQ='
        ])
        ->post('https://accounts.spotify.com/api/token',[
            'grant_type'=> 'authorization_code',
            'redirect_uri'=> 'http://127.0.0.1:8000/dashboard',
            'code'=> $clientCode,
        ]);
        SpotifyAPI::storeToken($token->json()['access_token'],$token->json()['refresh_token']);
        return;
    }

    public static function refreshToken(){
        $token_instance=Token::first();

        $new_token=Http::asForm()->withHeaders([
            'Authorization'=>'Basic YWUxMDVmY2FjYzc3NDhiYWJhNDE4NGIwZDZlNThkYzA6OTY1YmQ5NjZmYjM5NGM2NzlmODkzNjkzMmQ5NWEwZTQ='
        ])->post('https://accounts.spotify.com/api/token',[
            'grant_type'=> 'refresh_token',    
            'refresh_token'=>$token_instance->refresh_token,        
        ]);
        dump($new_token->json());
        $token_instance->token=$new_token->json()['access_token'];
        $token_instance->save();
        return;

    }

    public static function getFeatured(){
        $token_instance=Token::first();
        $token=$token_instance->token;
        $response = Http::withHeaders([
                'Authorization' => 'Bearer '.$token,
                'Content-Type' => 'application/json'
            ])->get('https://api.spotify.com/v1/browse/featured-playlists',[
                "country"=>"ES"
            ]);     
        //dd()  ;
        //dd($response->json());
        //dump(array_key_exists('error',$response->json()));
        if(array_key_exists('error',$response->json())){
            SpotifyAPI::refreshToken();
        }
        else{
            return $response->json();
        }
        
    }
}
