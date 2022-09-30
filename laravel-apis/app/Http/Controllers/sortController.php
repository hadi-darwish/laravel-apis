<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sortController extends Controller
{
    function getResult(Request $request)
    {
        $text = $request->text;
        $array = str_split($text);
        asort($array);
        $text = implode($array);



        return response()->json([
            "result" => $text
        ]);
    }
}
