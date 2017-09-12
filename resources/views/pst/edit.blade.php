@extends('master')

@section('main')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo asset('public/js/autosize.min.js') ?>"></script>
<style type="text/css">
    a{
        margin-right: 20px;
        margin-left: 5px;
    }
</style>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Pelayanan Statistik Terpadu</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Buku Tamu PST <small>Buku Pencatatan Pengunjung</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    @if(count($errors)>0)
                      <div class="well">
                        <ul style="color: red;">
                          @foreach($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach 
                        </ul>
                      </div>
                    @endif
                    @if ($message = Session::get('success'))
                    <div class="row">
                        <div class="col-md-6 col-md-offset-2" style="margin-left: 50px; margin-top: 20px; margin-bottom: -30px;">
                          <div class="alert alert-success alert-block" style="width: 100%">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                  <strong>{{ $message }}</strong>
                          </div>
                        </div>
                    </div>
                    @endif
                    <br />
                    <?php echo Form::open(array('action' => 'PstController@update', 'novalidate', 'class' => 'form-horizontal form-label-left' )) ?>

                      <?php $tanggal = date("Y/m/d", strtotime($pst->tanggal)); ?>

                      <input id="id" class="hidden" name="id" type="text" value="<?php echo $pst->id ?>">
                      <input id="" class="hidden" name="tanggal" type="text" value="<?php echo $tanggal ?>">

                      <div class="item form-group">
                        <label for="jenis_kelamin" class="control-label col-md-2">Keperluan Data</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="radio" class="flat" name="keperluan_data" id="KD1" value="1" <?php echo ($pst->keperluan_data=='1')?'checked':'' ?>  /> 
                            <a>Instansi/Perusahaan</a>
                            <input type="radio" class="flat" name="keperluan_data" id="KD2" value="2"  <?php echo ($pst->keperluan_data=='2')?'checked':'' ?>/>
                            <a>Pribadi</a>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama" class="form-control col-md-7 col-xs-12" name="nama" placeholder="both name(s) e.g Jon Doe" required="required" type="text" value="<?php echo $pst->nama ?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="jenis_kelamin" class="control-label col-md-2">Jenis Kelamin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="radio" class="flat" name="jenis_kelamin" id="JK1" value="1" <?php echo ($pst->jenis_kelamin=='1')?'checked':'' ?>  /> 
                            <a>Laki-laki</a>
                            <input type="radio" class="flat" name="jenis_kelamin" id="JK2" value="2" <?php echo ($pst->jenis_kelamin=='2')?'checked':'' ?>/>
                            <a>Perempuan</a>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="umur">Umur <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="umur" type="number" name="umur" value="<?php echo $pst->umur ?>" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="pekerjaan" class="control-label col-md-2">Pekerjaan Utama</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input type="radio" class="flat" name="pekerjaan" id="pekerjaan1" value="1" <?php echo ($pst->pekerjaan=='1')?'checked':'' ?>  /> 
                            <a>Pelajar/Mahasiswa</a>
                            <input type="radio" class="flat" name="pekerjaan" id="pekerjaan2" value="2" <?php echo ($pst->pekerjaan=='2')?'checked':'' ?>/>
                            <a>PNS</a>
                            <input type="radio" class="flat" name="pekerjaan" id="pekerjaan3" value="3" <?php echo ($pst->pekerjaan=='3')?'checked':'' ?>/>
                            <a>Pegawai Swasta</a>
                            <input type="radio" class="flat" name="pekerjaan" id="pekerjaan3" value="4" <?php echo ($pst->pekerjaan=='4')?'checked':'' ?>/>
                            <a>Wiraswasta</a>
                            <input type="radio" class="flat" name="pekerjaan" id="pekerjaan3" value="5" <?php echo ($pst->pekerjaan=='5')?'checked':'' ?>/>
                            <a>Lainnya</a>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="password" class="control-label col-md-2">Pendidikan Terakhir</label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <input type="radio" class="flat" name="pendidikan" id="pendidikan1" value="1" <?php echo ($pst->pendidikan=='1')?'checked':'' ?>/> 
                            <a>SD/MI</a>
                            <input type="radio" class="flat" name="pendidikan" id="pendidikan2" value="2" <?php echo ($pst->pendidikan=='2')?'checked':'' ?>/>
                            <a>SMP/MTs</a>
                            <input type="radio" class="flat" name="pendidikan" id="pendidikan3" value="3" <?php echo ($pst->pendidikan=='3')?'checked':'' ?>/>
                            <a>SMA/MA</a>
                            <input type="radio" class="flat" name="pendidikan" id="pendidikan4" value="4" <?php echo ($pst->pendidikan=='4')?'checked':'' ?>/>
                            <a>DI/DII/DIII</a>
                            <input type="radio" class="flat" name="pendidikan" id="pendidikan5" value="5" <?php echo ($pst->pendidikan=='5')?'checked':'' ?>/>
                            <a>DIV/SI</a>
                            <input type="radio" class="flat" name="pendidikan" id="pendidikan6" value="6" <?php echo ($pst->pendidikan=='6')?'checked':'' ?>/>
                            <a>SII/SIII</a>
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="instansi">Nama Instansi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="instansi" type="text" name="instansi" value="<?php echo $pst->instansi ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="password" class="control-label col-md-2">Tujuan Kunjungan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="radio" class="flat" name="tujuan_kunjungan" id="tujuan1" value="1" <?php echo ($pst->tujuan_kunjungan=='1')?'checked':'' ?>  /> 
                            <a>Mencari Data</a>
                            <input type="radio" class="flat" name="tujuan_kunjungan" id="tujuan2" value="2" <?php echo ($pst->tujuan_kunjungan=='2')?'checked':'' ?>/>
                            <a>Konsultasi Data</a>
                            <input type="radio" class="flat" name="tujuan_kunjungan" id="tujuan3" value="3" <?php echo ($pst->tujuan_kunjungan=='3')?'checked':'' ?>/>
                            <a>Konsultasi Kegiatan Statistik</a>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="data" class="control-label col-md-2 col-sm-3 col-xs-12">Permintaan Data (Data Yang Diinginkan)</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="data" type="text" name="data" value="<?php echo $pst->data ?>" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="telephone">Tahun Data <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="tahun_data" name="tahun_data" value="<?php echo $pst->tahun_data ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="password" class="control-label col-md-2">Tujuan Penggunaan Data</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                            <input type="radio" class="flat" name="tujuan_data" id="tujuan_data1" value="1" <?php echo ($pst->tujuan_data=='1')?'checked':'' ?>  /> 
                            <a>Penelitian</a>
                            <input type="radio" class="flat" name="tujuan_data" id="tujuan_data2" value="2" <?php echo ($pst->tujuan_data=='2')?'checked':'' ?>/>
                            <a>Perencanaan</a>
                            <input type="radio" class="flat" name="tujuan_data" id="tujuan_data3" value="3" <?php echo ($pst->tujuan_data=='3')?'checked':'' ?>/>
                            <a>Evaluasi</a>
                            <input type="radio" class="flat" name="tujuan_data" id="tujuan_data3" value="4" <?php echo ($pst->tujuan_data=='4')?'checked':'' ?>/>
                            <a>Penyebaran Informasi</a>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="telephone">No Hp <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="phone" name="no_hp" value="<?php echo $pst->no_hp ?>" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="password" class="control-label col-md-2">Kepuasan Pengguna</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="radio" class="flat" name="kepuasan"  value="1" <?php echo ($pst->kepuasan=='1')?'checked':'' ?>/> 
                            <a>Buruk</a>
                            <input type="radio" class="flat" name="kepuasan"  value="2" <?php echo ($pst->kepuasan=='2')?'checked':'' ?>/>
                            <a>Kurang</a>
                            <input type="radio" class="flat" name="kepuasan"  value="3" <?php echo ($pst->kepuasan=='3')?'checked':'' ?>/>
                            <a>Bagus</a>
                            <input type="radio" class="flat" name="kepuasan"  value="4" <?php echo ($pst->kepuasan=='4')?'checked':'' ?>/>
                            <a>Mantab</a>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="password" class="control-label col-md-2">Saran</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="resizable_textarea form-control"  name="saran"><?php echo $pst->saran ?></textarea>
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-2">
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    <?php echo Form::close() ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<!-- Autosize -->
<script>
  $(document).ready(function() {
    autosize($('.resizable_textarea'));

    $("#title").keyup(function(){
      $("#jdl_info").html($("#title").val());
    });

    $("#deskripsi").keyup(function(){
      $("#desc").html($("#deskripsi").val());
    });

    $("#back-color").change(function(){
      $("#back").css('background-color',$("#back-color").val());
    });

    $("#judul-color").change(function(){
      $("#jdl_info").css('color',$("#judul-color").val());
    });

    $("#back-desc").change(function(){
      $("#back-deskripsi").css('background-color',$("#back-desc").val());
    });

    $("#desc-color").change(function(){
      $("#desc").css('color',$("#desc-color").val());
    });

  });
</script>
<!-- /Autosize -->
@stop