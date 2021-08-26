<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
		// $servidores = Servidor::orderBy('id_servidor', 'desc')->paginate();
		// return view('layouts.navigation', compact('data'));
		try {
			// $data =  $this->userRepository->index($request);
			$data = Menu::where('subitem',0)->orderBy('id_leftmenu')->get();
			return response()->json($data, 200);
		} catch(\Exception $e){
			$data = [
				"message"=> "Error, try again!",
				"text"=>    $e->getMessage()
			];
			return response()->json($data, 401);
		}
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function subindex($id)
	{
		try {
			// $data =  $this->userRepository->index($request);
			$data = Menu::where('subitem',1)->where('item',$id)->orderBy('id_leftmenu')->get();
			return response()->json($data, 200);
		} catch(\Exception $e){
			$data = [
				"message"=> "Error, try again!",
				"text"=>    $e->getMessage()
			];
			return response()->json($data, 401);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Menu  $menu
	 * @return \Illuminate\Http\Response
	 */
	public function show(Menu $menu)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Menu  $menu
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Menu $menu)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Menu  $menu
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Menu $menu)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Menu  $menu
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Menu $menu)
	{
		//
	}
}
