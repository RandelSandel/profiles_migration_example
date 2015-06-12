<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
// use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
// use Request; // to use the facade without a custom request

class CartsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$carts = \App\Carts::all();
		
		
		return view('carts.index', compact('carts'));
			
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		

		return view('carts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\CartsRequest $request)
	{
		$project = new \App\Carts($request->all());
		
		$project->save();
		
		flash()->success('Your cart has been created');
		flash()->overlay('you are creating a project');

		return redirect('carts');
	}

	/**
	 * Display the specified resource.
	 * Using as profile page
	 
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$article = \App\Carts::findOrFail($id);
		//Auth::user()->articles()->
		return view('articles.show', compact('article'));
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
