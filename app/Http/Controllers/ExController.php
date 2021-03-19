<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExController extends Controller
{
    public function ex1Cal(Request $request)
    {
        // return $request->all();
        $a =$request->cost_number;
        $b =$request->b_number;
        $a_r = str_split($a);
        $b_r = str_split($b);
        $answer = 'Valid';
        foreach ($a_r as $key => $value) {
            // echo $key,' -> '.$value,"<br>";
            if ($value == $b_r[$key]) {
                $answer = 'Invalid';
            }
        }
        return  view('answer', ['answer' => $answer]);
    }

    public function ex2Cal(Request $request)
    {
        $answer = $this->checkAbundant($request->number);
        return  view('answer', ['answer' => $answer]);
    }

     private function getSum($n)
        {
            $sum = 0;

            for ($i = 1; $i <= sqrt($n); $i++)
            {
                if ($n % $i == 0)
                {
                    if ($n / $i == $i)
                        $sum = $sum + $i;
                    else
                    {
                        $sum = $sum + $i;
                        $sum = $sum + ($n / $i);
                    }
                }
            }
            $sum = $sum - $n;
            return $sum;
        }

    private function checkAbundant($n)
        {

            $check_n = $this->getSum($n);
            // echo $check_n;
            if ($check_n > $n) {
                return "abundant";
            } if ($check_n < $n) {
                return "deficient";
            } else {
                return "perfect";
            }
        }
}
