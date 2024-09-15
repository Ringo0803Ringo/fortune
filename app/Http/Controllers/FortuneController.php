<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FortuneController extends Controller
{
    public function getFortune() {
        $fortunes = [
            '大吉',
            '中吉',
            '小吉',
            '吉',
            '末吉',
            '凶',
            '大凶'
        ];

        $result = $fortunes[array_rand($fortunes)];

        return view('top', compact('result'));

    }
}
