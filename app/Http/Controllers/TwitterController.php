<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\CallTwitterApi;

class TwitterController extends Controller
{
    // 投稿
    public function index(Request $request)
    {
        $t = new CallTwitterApi();
        $search_word = $request->get('search_word');
        if($search_word){
            $d = $t->searchTweets($search_word); //画面から受け取る形で
        }else{
            $d = $t->searchTweets("雨"); //画面から受け取る形で
        }

        $array = array();
        foreach ($d as $d) {
            //UI調整 statusesOembed
            $array[] = array($t->statusesOembed($d->id));
        }
        return view('twitterapi', ['twitter' => $array]);
    }
}
