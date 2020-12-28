<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use App\Credit;
use App\Sale;
use Carbon\carbon;

class salesController extends Controller
{
    
    public function index()
    {
    	$title = "Sales";
      $today = Carbon::today();
      $sales = Sale::where('created_at', $today)->get();
    	$stocks = Stock::get();
    	return view('sales', compact('title', 'stocks', 'sales'));
    }

    
   public function credit()
   {
   	$title = 'Book Credit';
   	$stocks = Stock::get();
   	return view('bookCredit', compact('title', 'stocks'));
   }
   
   public function makeCredit(Request $request)
   {
   	$request->validate([
   	'product_id' => 'required',
   	'quantity'	=> 'required',
   	'debtor'	=> 'required'
   ]);

   		if ($request) {
   			$store = Credit::create([
   				'product_id' => request('description'),
			   	'quantity'	=> request('quantity'),
			   	'debtor'	=> request('debtor')
   			]);

   			return  redirect()->back()->with('success', 'credit booked!');

   		}else{
   			return Redirect()->back()->with('error', 'No request data was sent');
   		}

   }

   public function store(Request $request)
   {
   	$request->validate([
   	'product_id' => 'required',
   	'quantity'	=> 'required',
   	
   ]);

   	if ($request) {
   			$store = Sale::create([
   				'stock_id' => request('product_id'),
			   	'quantity'	=> request('quantity'),
			   
   			]);

   			return  redirect()->back()->with('success', 'Sale was successful');

   		}


   }
}
