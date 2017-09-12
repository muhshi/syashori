<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Input;
use Session;
use App\PST;
use Illuminate\Http\Request;

class PstController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$halaman = "pst";
        $data = ['halaman' => $halaman];
		return view("pst/index", $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function monitoring()
	{
		$halaman = "monitoring";
        $data = ['halaman' => $halaman];
        $jml_pengunjung = DB::select('SELECT year(tanggal) as tahun, month(tanggal) as bulan, sum(jml_pengunjung) as jml_pengunjung from pst group by year(tanggal), month(tanggal)');
        $kepuasan = DB::select('SELECT puas , ROUND(COUNT(kepuasan)*100/t.s,2) AS `presentase`
								FROM pst, puas
								CROSS JOIN (SELECT SUM(jml_pengunjung) AS s FROM pst) t
								WHERE pst.kepuasan=puas.id
								GROUP BY kepuasan
								ORDER BY kepuasan desc');
        $pekerjaan = DB::select('SELECT kerja , ROUND (COUNT(pekerjaan)*100/t.s, 2) AS `presentase`
								FROM pst, kerja
								CROSS JOIN (SELECT SUM(jml_pengunjung) AS s FROM pst) t
								WHERE pst.pekerjaan=kerja.id
								GROUP BY pekerjaan
								ORDER BY pekerjaan desc');
        $pendidikan = DB::select('SELECT sekolah , ROUND (COUNT(pendidikan)*100/t.s, 2) AS `presentase`
								FROM pst, sekolah
								CROSS JOIN (SELECT SUM(jml_pengunjung) AS s FROM pst) t
								WHERE pst.pendidikan=sekolah.id
								GROUP BY pendidikan
								ORDER BY pendidikan desc');
        $pendidikan1 = DB::select('SELECT sekolah , ROUND (COUNT(pendidikan)*100/t.s, 2) AS `presentase`
								FROM pst, sekolah
								CROSS JOIN (SELECT SUM(jml_pengunjung) AS s FROM pst) t
								WHERE pst.pendidikan=sekolah.id
								GROUP BY pendidikan
								ORDER BY pendidikan desc');
        $tujuan_data = DB::select('SELECT tujuan_penggunaan_data , ROUND (COUNT(tujuan_data)*100/t.s, 2) AS `presentase`
								FROM pst, tujuan_penggunaan_data
								CROSS JOIN (SELECT SUM(jml_pengunjung) AS s FROM pst) t
								WHERE pst.tujuan_data=tujuan_penggunaan_data.id
								GROUP BY tujuan_data
								ORDER BY tujuan_data desc');
        $tujuan_data1 = DB::select('SELECT tujuan_penggunaan_data , ROUND (COUNT(tujuan_data)*100/t.s, 2) AS `presentase`
								FROM pst, tujuan_penggunaan_data
								CROSS JOIN (SELECT SUM(jml_pengunjung) AS s FROM pst) t
								WHERE pst.tujuan_data=tujuan_penggunaan_data.id
								GROUP BY tujuan_data
								ORDER BY tujuan_data desc');
		return view("pst/monitoring", compact('jml_pengunjung', 'kepuasan', 'pekerjaan', 'pendidikan', 'pendidikan1', 'tujuan_data', 'tujuan_data1'), $data);	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
	   'nama'  		           	=> 'required',
	   'umur'			   		=> 'required',
	   'instansi' 		  		=> 'required',
	   'data'			   		=> 'required',
	   'tahun_data'		   		=> 'required',
	  );
	  $validator = Validator::make(Input::all(), $rules);

	  // process the login
	  if ($validator->fails()) {
	   return Redirect::to('pst/index')
	    ->withErrors($validator);
	  } else {
	  	date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('Y-m-d');

    	$pst             		= new PST();
    	$pst->tanggal          	= $tanggal;
    	$pst->keperluan_data   	= Input::get('keperluan_data');
        $pst->nama           	= Input::get('nama');
        $pst->jenis_kelamin    	= Input::get('jenis_kelamin');
        $pst->umur	           	= Input::get('umur');
        $pst->pekerjaan        	= Input::get('pekerjaan');
        $pst->pendidikan       	= Input::get('pendidikan');
        $pst->instansi          = Input::get('instansi');
		$pst->tujuan_kunjungan	= Input::get('tujuan_kunjungan');
		$pst->data				= Input::get('data');
		$pst->tahun_data	 	= Input::get('tahun_data');
        $pst->tujuan_data    	= Input::get('tujuan_data');
        $pst->no_hp          	= Input::get('no_hp');
        $pst->kepuasan         	= Input::get('kepuasan');
        $pst->saran          	= Input::get('saran');
		$pst->save();
    	//$tes = $request->all();
        //$target         = new Target();
        //DB::statement('ALTER TABLE target ADD COLUMN '.$text.' INT');
        //DB::statement('ALTER TABLE produktifitas ADD COLUMN '.$text.' INT');

    	return back()
                    ->with('success','Input Data Berhasil.');
        }
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$halaman = "pst";
        $data = ['halaman' => $halaman];
    	$pst = DB::select('SELECT pst.id, pst.tanggal, pst.nama, jenis_kelamin.jenis_kelamin, kerja.kerja, sekolah.sekolah, pst.instansi, pst.data, pst.tahun_data, tujuan_penggunaan_data.tujuan_penggunaan_data, puas.puas, pst.saran FROM  pst, sekolah, tujuan_penggunaan_data, jenis_kelamin, kerja, puas WHERE pst.pendidikan = sekolah.id AND pst.jenis_kelamin = jenis_kelamin.id AND pst.pekerjaan=kerja.id AND pst.tujuan_data=tujuan_penggunaan_data.id AND pst.kepuasan=puas.id
    		ORDER by pst.tanggal DESC');
    	return view('pst/show', compact('pst'), $data);
	}

	public function skd()
	{
		$halaman = "pst";
        $data = ['halaman' => $halaman];
        $tanggal_awal = Input::get('tanggal_awal');
        $tanggal_akhir = Input::get('tanggal_akhir');
        $tanggalA = date("Y/m/d", strtotime($tanggal_awal));
        $tanggalB = date("Y/m/d", strtotime($tanggal_akhir));
    	$skd = DB::select('SELECT pst.id, pst.tanggal, pst.nama, jenis_kelamin.jenis_kelamin, pst.instansi, pst.data, pst.tahun_data, tujuan_penggunaan_data.tujuan_penggunaan_data, puas.puas, pst.saran FROM pst, tujuan_penggunaan_data, jenis_kelamin, puas WHERE pst.jenis_kelamin = jenis_kelamin.id AND pst.tujuan_data=tujuan_penggunaan_data.id AND pst.kepuasan=puas.id AND pst.keperluan_data=1 AND pst.tanggal > "'.$tanggal_awal.'"'.' AND pst.tanggal < "'.$tanggal_akhir.'"');
    	return view('pst/skd', compact('skd', 'tanggalA', 'tanggalB'), $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$halaman = "pst";
        $data = ['halaman' => $halaman];
        $pst = PST::findOrFail($id);
        return view('pst.edit', compact('pst'), $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request){
        $post = $request->request->all();
        print_r($post);
        $model = new PST();
        $hasil = $model->edit($post);
        
        return redirect('pst/show');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id){

    	$mitra = PST::findOrFail($id);
    	$mitra->delete();
    	return redirect('pst/show');
    }

}
