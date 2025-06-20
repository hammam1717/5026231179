<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function index()
    {
        $data = DB::table('chat')->first();
        $pesan = $data ? $this->konversiEmoticon($data->pesan) : '';
        return view('chat', compact('pesan'));
    }

    private function konversiEmoticon($text)
    {
        $emoticons = [
            ':))' => '1.png',
            ':3'  => '2.png',
            ':P'  => '3.png',
            ':C'  => '4.png',
            ';)'  => '5.png',
        ];

        $words = explode(' ', $text);

        foreach ($words as &$word) {
            if (isset($emoticons[$word])) {
                $word = '<img src="' . asset("emoticons/" . $emoticons[$word]) . '" alt="' . $word . '" width="25">';
            }
        }

        return implode(' ', $words);
    }
}
