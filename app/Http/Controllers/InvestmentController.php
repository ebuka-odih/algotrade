<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestmentController extends Controller
{

   public function invest()
   {
       return view('dashboard.investment.invest');
   }
}
