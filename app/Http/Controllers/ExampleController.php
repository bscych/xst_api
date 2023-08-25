<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Secret;
use Illuminate\Support\Facades\DB;
class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getUSers(){
        $users = User::all();
        return $users->toJson();
    }
    //

    public function getSecrets(){
        // $sectres = DB::table('secret')->get();
        $sectres = Secret::all();
        return $sectres->toJson();
    }
    
    public function storeSecret(){
        $name = request('name');
        $url = request('url');
        $username = request('username');
        $password = request('password');
        $comments = request('comments');
          DB::table('secret')
          ->insert([
            'name'=>$name,
            'username'=>$username,
            'url'=>$url,'password'=>$password,
            'comments'=>$comments]);
    }
}
