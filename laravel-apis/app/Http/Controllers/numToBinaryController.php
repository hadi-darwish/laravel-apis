<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LengthException;

class numToBinaryController extends Controller
{
    //this will convert all numbers to binary in a certain string
    function getResult(Request $request)
    {
        $text = $request->text;
        $array = str_split($text);
        //temp will save all consecutive numbers temporarily
        $temp = "";
        $result = "";

        for ($i = 0; $i < strlen($text); $i++) {
            if (is_numeric($array[$i])) {
                $temp .= $array[$i];
                if (($i + 1 <  strlen($text)  && !is_numeric($array[$i + 1]))  || $i + 1 >= strlen($text)) {
                    //this will transform the number into binary
                    $result .= decbin($temp);
                    $temp = "";
                }
            } else {
                $result .= $array[$i];
            }
        }
        return response()->json([
            "result" => $result
        ]);
    }
}
