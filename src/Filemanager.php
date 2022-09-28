<?php


namespace Purnada\Filemanager;

use Illuminate\Support\Facades\Http;
class Filemanager
{
    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}