<?php namespace Bakesale\Http\Controllers\Backroom;

use Bakesale\Http\Requests;
use Bakesale\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Bakesale\Category;

class CategoriesController extends Controller {

	/**
	 * Show a listing of all resources.
	 *
	 * @return View
	 */
	public function index()
	{
		return view('backroom.categories.index', array( 'categories' => Category::all() ));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return View
	 */
	public function create()
	{
		return view('backroom.categories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$category = new Category;

		$category->name = $request->get('name');
		$category->description = $request->get('description');
		$category->approved = 1; // is approved by default for admins

		$category->save();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return view('backroom.categories.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return View
	 */
	public function edit($id)
	{
		$category = Category::find($id);

		$data = array( 'category' => $category );

		return view('backroom.categories.edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return 'Hello';
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

	/**
	 * Suggest a new category.
	 *
	 * @return mixed
	 */
	public function suggest()
	{
		return view('backroom.categories.suggest');
	}

}
