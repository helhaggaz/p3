<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipController extends Controller
{
    public function index()
    {
      return 'Show the main page!!';
    }
    public function calculateAmountToPay()
    {
      return 'Show the final amount to pay';
    }
}
