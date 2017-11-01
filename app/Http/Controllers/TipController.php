<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipController extends Controller
{
    public function index(Request $request)
    {
        //if isset($request)
        # Retrieve data from the form
        $splitWays = $request->input('splitWays', null);
        $tabAmount = $request->input('tabAmount', null);
        $roundUp = $request->has('roundUp');
        $tip = $request->input('tip');

        $payment = 0;
        $tipped = false;

        switch ($tip) {
        case 10:{ $tip10 = 'SELECTED' ; break;}
        case 15:{ $tip15 = 'SELECTED' ; break;}
        case 18:{ $tip18 = 'SELECTED' ; break;}
        case 20:{ $tip20 = 'SELECTED' ; break;}
        default: { $tip0 = 'SELECTED' ; break;}
      }

        if ($request->has('hiddenField')) {
            # validation
            $this->validate($request, [
          'splitWays' => 'required|numeric',
          'tabAmount' => 'required|numeric'
        ]);
            # Calculate the payment
            if ($roundUp) {
                $payment= ceil(($tabAmount + $tabAmount*$tip/100)/$splitWays);
            } else {
                $payment= round(($tabAmount + $tabAmount*$tip/100)/$splitWays, 2);
            }
            if ($tip>0) {
                $tipped = true;
            }
        }

        # Return the view, with the old filled form fields
        return view('tipCalculator.form')->with([
          'splitWays' => $splitWays,
          'tabAmount' => $tabAmount,
          'roundUp' => $request->has('roundUp'),
          'tip' => $tip,
          'tipped' => $tipped,
          'payment' => $payment,
      ]);
    }
    public function calculateAmountToPay(Request $request)
    {
        dump($request);
        return view('tipCalculator.payment');
    }
}
