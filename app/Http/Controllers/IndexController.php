<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use Config;
use App;
use Mail;

class IndexController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$objProducts = App\InfoProduct::all();

		$i=0;
		$arrProductTypes = array(
			'home_textile' => 0,
			'knit_wear' => 0,
			'leather_product' => 0,
			'sweater' => 0,
			'woven_wear' => 0
			);

		foreach ($objProducts as $value) {
			if(!empty($value))
			{
				foreach ($arrProductTypes as $type=>$count) {
					if($value->type == $type)
						$arrProductTypes[$type]++;
				}

				if($arrProductTypes[$value->type] < 3)
				{
					$arrProducts[$i]['type'] = $value->type;
					$arrProducts[$i]['type_full'] = $value->type_full;
					$arrProducts[$i]['filename'] = $value->filename;
					$i++;
				}
			}
		}

		shuffle($arrProducts);

		return view('home',['arrProducts'=>$arrProducts]);
	}
	
	public function show_items_categorywise(Request $request)
	{
		//respond only when page is called by ajax
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')
		{
			$category = $request->route('category');

			if($category != '')
			{
				$objProducts = App\InfoProduct::where('type',$category)->get();
				
				if(sizeof($objProducts) != 0)
					return view('category', ['objProducts' => $objProducts]);	
				else
					echo '<h3>No products found under this category!</h3>';
			}	
			else
			{
				abort(500);
			}
		}
		else
		{
			abort(404);
		}
	}

	public function contact_us_form(Request $request)
	{
		$name = Input::get('name','');
		$email = Input::get('email','');
		$message = Input::get('message','');
		$data['error'] = false;

		if($name != '' && $email != '' && $message != '')
		{
			$arrMailData['name'] = $name;
			$arrMailData['email'] = $email;
			$arrMailData['message'] = $message;

			try{
				Mail::send('emails.contact_us', ['arrMailData' => $arrMailData], function ($message) use ($email) {
				    $message->from(env('MAIL_USERNAME'), 'Zion Fashion Contact us form');

				    $message->to('support@zionfashions.com')
				    ->bcc('nikhil.lad@outlook.com')
				    ->subject('Message from '.$email)
				    ->replyTo($email,$email);
				});
			}
			catch(Exception $e)
			{
				$data['error'] = true;
				$data['message'] = 'Something went wrong. Please try again.';
			}

			if($data['error'] == false)
			{
				$data['error'] = false;
				$data['message'] = 'Thank you, your message has been sent.';
			}	

		}
		else
		{
			$data['error'] = true;
			$data['message'] = 'Please fill in all the fields.';
		}

		return json_encode($data);
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
