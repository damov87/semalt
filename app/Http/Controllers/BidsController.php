<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bid;
use Illuminate\Support\Facades\DB;

class BidsController extends Controller
{
    public function index()
    {
    	$max_price = Bid::all()->max('price');
        $bids = Bid::select('name')
        ->where('price', '=', $max_price)
        ->get();

        return view('bids.index', compact('bids'));
    }
}