<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipController extends Controller
{
    public function index()
    {
      return view('tipCalculator.form');

    }
    public function calculateAmountToPay()
    {
      return view('tipCalculator.payment');

    }
}
