<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class operationController extends Controller
{
    //this function will solve the operation given by the user
    function getResult(Request $request)
    {
        $text = $request->text;
        $array = explode(" ", $text);
        $result = $array[1];
        //this will check for what kind of operation will be used
        if ($array[0] == "+") {
            for ($i = 2; $i < count($array); $i++) {
                $result += $array[$i];
            }
        } else if ($array[0] == "-") {
            for ($i = 2; $i < count($array); $i++) {
                $result -= $array[$i];
            }
        } else if ($array[0] == "/") {
            for ($i = 2; $i < count($array); $i++) {
                $result /= $array[$i];
            }
        } else if ($array[0] == "*") {
            for ($i = 2; $i < count($array); $i++) {
                $result *= $array[$i];
            }
        } else if ($array[0] == "%") {
            for ($i = 2; $i < count($array); $i++) {
                $result %= $array[$i];
            }
        }
        return response()->json([
            "result" => $result
        ]);
    }
}
