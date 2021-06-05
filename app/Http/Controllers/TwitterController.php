<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
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

    public function show($id){
        //essa função vai ser para retornar a página inicial apenas com os twitters do usuario

        $user = User::findOrFail($id);

        $user_conectado = auth()->user();

        $twitter = Twitter::where('user_id','=',$id)->get();

        return view('twits.profile', ['twitter' => $twitter, 'users' => $user, 'user_connect' => $user_conectado]);

    }

    public function salvaComentario(Request $request){
        $twitter = new Twitter();
        $user = auth()->user();

        $twitter->twitterText = $request->twitt;


        $twitter->save();
        return redirect('/dashboard')->with('msg','Twitter realizado');
    }
}
