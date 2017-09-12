<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Input;
use Session;
use App\Mitra;


class InfografisController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$halaman = "infografis";
        $data = ['halaman' => $halaman];
		return view("index", $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function info1()
	{
		$halaman = "infografis";
        $data = ['halaman' => $halaman];
		return view("infografis/index", $data);
	}

	public function elemen()
	{
		$halaman = "infografis";
        $data = ['halaman' => $halaman];
		return view("infografis/4elemen", $data);
	}

	public function insta()
	{
		$halaman = "infografis";
        $data = ['halaman' => $halaman];
		return view("infografis/insta", $data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	

}
