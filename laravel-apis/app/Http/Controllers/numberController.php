<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class numberController extends Controller
{
    function getArray($number)
    {
        //counter will handel at what place value are the number in
        $counter = 0;
        $array = [];
        //this will add the numbers to the array where sum of all numbers will 
        //be the same number given by the user
        while ($number != 0) {
            $array[] =  (($number % 10) * (10 ** $counter));
            $counter++;
            $number /= 10;
            $number = round($number, 0);
        }
        //this will reverse the result array
        $array = array_reverse($array);
        return response()->json([
            "result" => $array
        ]);
    }
}
