<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndexController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$arrProducts = array(
			0 => array(
				'name' => 'Product 1',
				'link' => 'http://www.amazon.in/Vibgyor-Sleeve-Hooded-Black-Sweatshirt/dp/B00Q1NG0IQ/ref=sr_1_1?ie=UTF8&qid=1448025874&sr=8-1&keywords=swater',
				'image_small' => asset('img/products/knit_wear.jpg'),
				'type' => 'knit_wear',
				'type_full' => 'Knit Wear'
			),
			1 => array(
				'name' => 'Product 2',
				'link' => 'http://www.amazon.in/Vibgyor-Sleeve-Hooded-Black-Sweatshirt/dp/B00Q1NG0IQ/ref=sr_1_1?ie=UTF8&qid=1448025874&sr=8-1&keywords=swater',
				'image_small' => asset('img/products/knit_wear2.jpg'),
				'type' => 'knit_wear',
				'type_full' => 'Knit Wear'
			),
			2 => array(
				'name' => 'Product 3',
				'link' => 'http://www.amazon.in/Vibgyor-Sleeve-Hooded-Black-Sweatshirt/dp/B00Q1NG0IQ/ref=sr_1_1?ie=UTF8&qid=1448025874&sr=8-1&keywords=swater',
				'image_small' => asset('img/products/shirt.jpg'),
				'type' => 'woven_wear',
				'type_full' => 'Woven Wear'
			),
			3 => array(
				'name' => 'Product 4',
				'link' => 'http://www.amazon.in/Vibgyor-Sleeve-Hooded-Black-Sweatshirt/dp/B00Q1NG0IQ/ref=sr_1_1?ie=UTF8&qid=1448025874&sr=8-1&keywords=swater',
				'image_small' => asset('img/products/shirt2.jpg'),
				'type' => 'woven_wear',
				'type_full' => 'Woven Wear'
			),
			4 => array(
				'name' => 'Product 5',
				'link' => 'http://www.amazon.in/Vibgyor-Sleeve-Hooded-Black-Sweatshirt/dp/B00Q1NG0IQ/ref=sr_1_1?ie=UTF8&qid=1448025874&sr=8-1&keywords=swater',
				'image_small' => asset('img/products/sweater.jpg'),
				'type' => 'sweater',
				'type_full' => 'Sweater'
			),
			5 => array(
				'name' => 'Product 6',
				'link' => 'http://www.amazon.in/Vibgyor-Sleeve-Hooded-Black-Sweatshirt/dp/B00Q1NG0IQ/ref=sr_1_1?ie=UTF8&qid=1448025874&sr=8-1&keywords=swater',
				'image_small' => asset('img/products/home_text.jpg'),
				'type' => 'home_textile',
				'type_full' => 'Home Textile'
			)
		);
		return view('home',['arrProducts'=>$arrProducts]);
	}
	
	public function contact_us_form()
	{
		dd('dd');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
