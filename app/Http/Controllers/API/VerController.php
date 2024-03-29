<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ver;

class VerController extends Controller
{
    //
    public function index()
    {
        try {
            //verテーブルのデータの最初だけ取得
            $version = Ver::first();
            //ここdえAPIで送りたいデータを入れ込んでいる
            $result = [
                'result'      => true,
                'version'     => $version->version,
                'min_version' => $version->min_version
            ];
        } catch (\Exception $e) {
            $result = [
                'result' => false,
                'error' => [
                    'messages' => [$e->getMessage()]
                ],
            ];
            return $this->resConversionJson($result, $e->getCode());
        }
        return $this->resConversionJson($result);
    }

    private function resConversionJson($result, $statusCode = 200)
    {
        if (empty($statusCode) || $statusCode < 100 || $statusCode >= 600) {
            $statusCode = 500;
        }
        // 結果をjsonに返す処理
        // JSON_UNESCAPED_SLASHESはスラッシュのエスケープを抑制できる
        return response()->json($result, $statusCode, ['Content-Type' => 'application/json'], JSON_UNESCAPED_SLASHES);
    }
}
