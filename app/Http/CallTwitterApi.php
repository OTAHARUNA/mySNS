<?php

namespace App\Http;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;

class callTwitterApi
{

    private $t;

    public function __construct()
    {
        $this->t = new TwitterOAuth(
            TW_CK,
            TW_CS,
            TW_AT,
            TW_ATS
        );
    }

    // 投稿検索
    public function serachTweets(String $searchWord)
    {
        $d = $this->t->get("search/tweets", [
            'q' => $searchWord,
            'count' => 3,
        ]);

        return $d->statuses;
    }

    //oEmbed互換形式で取得
    public function statusesOembed(String $id)
    {
        $d = $this->t->get("statuses/oembed", [
            'id' => $id,
        ]);

        return $d->html;
    }
}
