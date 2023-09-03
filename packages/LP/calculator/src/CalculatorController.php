<?php

namespace LP\Calculator;

use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function add($a, $b)
    {
        $result = $a + $b;
        return view('calculator::add', compact('result'));
    }

    public function substarct($a, $b)
    {
        $result = $a - $b;

        return view('calculator::add', compact('result'));
    }
}
