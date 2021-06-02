<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\Models\Twitter;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TwitterController extends Controller
{
    public function index(){
//        $twitter = Twitter::all()->reverse()->take(5)->join('user');
        $twitter = DB::table('twitters')->join('users', 'twitters.user_id','=','users.id')
        ->select('twitters.*','users.name')->get()->reverse()->take(5);
        $user = auth()->user();



        return view('welcome', ['twitter' => $twitter, 'users' => $user]);
    }

    public function dashboard(){
        $user = auth()->user();
    }

    public function store(Request $request){
        $twitter = new Twitter();
        $user = auth()->user();

        $twitter->twitterText = $request->twitt;
        $twitter->user_id = $user->id;

        $twitter->save();
        return redirect('/dashboard')->with('msg','Twitter realizado');
    }
}
