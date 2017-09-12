<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mitra extends Model {

	protected $table = 'mitra';

	public function edit($post){
        date_default_timezone_set('Asia/Jakarta');
        $update_skr = date('Y-m-d H:i:s');
//        print_r($update_skr);
        extract($post);
        $affected = DB::update('update mitra set '
                . 'id = ?,'
                . 'nama = ?,'
                . 'tempat_lahir = ?, '
                . 'tanggal_lahir = ?, '
                . 'alamat = ?, '
                . 'pendidikan = ?, '
                . 'no_hp = ?, '
                . 'updated_at = ? '
                . 'where id = ?', 
                [
                    $id, 
                    $nama,
                    $tempat_lahir, 
                    $tanggal_lahir,
                    $alamat,
                    $pendidikan,
                    $no_hp,
                    $update_skr,
                    $id                   
                    ]);
        return ($affected);
    }

}
