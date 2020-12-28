<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;

class ProductsController extends Controller
{
    public function create()
    {	$stock = Stock::paginate(10);
    	$title = "Add Product";
    	return view('AddProduct', compact('title', 'stock'));
    }

    public function store(Request $request)
    {	
    	$request->validate([
    		"description" 	=> "required",
    		"sellingPrice"	=> "required",
    		"costPrice"		=> "required",
    		"quantity"		=> "required"
    	]);
    	
    	$store = Stock::create([
    		'description'	=> request('description'),
    		'sellingPrice'	=> request('sellingPrice'),
    		'costPrice'		=> request('costPrice'),
    		'quantity'		=> request('quantity')
    	]);
    	if ($store) {
    		return Redirect('/addProduct')->with('success', 'Stock added!');
    	}else{
    		return "Ooops! something went wrong";
    	}
    	
    }


   public function moderate()
   {
   	$stocks = Stock::paginate(20);
   	$title = "Moderate Prices";
   	return view('moderatePrice', compact('stocks', 'title'));
   }
}
