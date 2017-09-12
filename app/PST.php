<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PST extends Model {

	protected $table = 'pst';

	public function edit($post){
        date_default_timezone_set('Asia/Jakarta');
        $update_skr = date('Y-m-d H:i:s');
//        print_r($update_skr);
        extract($post);
        $affected = DB::update('update pst set '
                . 'id = ?,'
                . 'tanggal = ?,'
                . 'nama = ?,'
                . 'jenis_kelamin = ?,'
                . 'umur = ?,'
                . 'pekerjaan = ?,'
                . 'pendidikan = ?,'
                . 'tujuan_kunjungan = ?, '
                . 'data = ?, '
                . 'tahun_data = ?, '
                . 'tujuan_data = ?, '
                . 'no_hp = ?, '
                . 'kepuasan = ?, '
                . 'saran = ?, '
                . 'updated_at = ? '
                . 'where id = ?', 
                [
                    $id, 
                    $tanggal,
                    $nama,
                    $jenis_kelamin,
                    $umur,
                    $pekerjaan,
                    $pendidikan,
                    $tujuan_kunjungan, 
                    $data,
                    $tahun_data,
                    $tujuan_data,
                    $no_hp,
                    $kepuasan,
                    $saran,
                    $update_skr,
                    $id                   
                    ]);
        return ($affected);
    }

}
