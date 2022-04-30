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
        $d = $t->serachTweets("雨");

        $array = array();
        foreach ($d as $d) {
            $array[] = array($t->statusesOembed($d->id));
        }
        return view('twitterapi', ['twitter' => $array]);
    }
}
