<?php

class FileController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
	// Mapped to yoursite.com/progress
	public function getProgess() {
	    return Response::json(array(Session::get('progress')));
	}

	public function store()
	{
		 // getting values from form (like $record_num)
    Session::put('progress', 0);
    Session::save(); // Remember to call save()

		// $pieces = preg_split( '/\r\n|\r|\n/', file_get_contents(Input::file('files')) );
	 // 	foreach ( $pieces as $item ) {
	 // 			$p = explode(",", $item);
	 // 			foreach ($p as $value) {
	 // 				if (ctype_alpha($value)) {
	 // 					$words = $value;
	 // 				}else{
		//  				$file = new Document;
		//  				$file->plant = $words;
		//  				$file->serial = $value;
		//  				$file->save();
	 // 				}
	 // 			}
		// 	}
		$plant = Input::get('plant');
		$start = Input::get('start');
		$end = Input::get('end');

		$validator = Validator::make(
		    array(
		        'plant' => $plant,
		        'start' => $start ,
		        'end' => $end
		    ),
		    array(
		        'plant' => 'required|min:5|alpha',
		        'start' => 'required|min:5|integer',
		        'end' => 'required|min:5|integer'
		    )
		);

		if ($validator->fails())
		{
		    return Redirect::back()->withErrors($validator);
		}

		$count = 0;
		for ($i = $start ; $i <= $end; $i++) {
				// $file = new Document; 
				// $file->plant = $plant;
			 // 	$file->serial = $start;
			 // 	$file->save();
			 	$start += 1;
			 	$count += 1;
			 	// Session::put('progress', $i);
     //    Session::save(); // Remember to call save()
		}

		// $response = Response::make();
  //   $response->header('Content-Type', 'application/json');
  //   return $response;

		return Redirect::back()->with('message',$count);
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
