@extends('master')

@section('main')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<div class="right_col" role="main" style="min-height: 300px;">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data Pengunjung</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row">

          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <table id="example1" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Instansi</th>
                    <th>Data</th>
                    <th>Kepuasan</th>
                    <th>Saran</th>
                    <th style="width: 100px;">Action</th>
                  </tr>
                </thead>


                <tbody>
                @if(!empty($pst))
                  <?php foreach($pst as $pengunjung): ?>
                  <tr>
                  
                    <td>{{ $pengunjung->tanggal }}</td>
                    <td>{{ $pengunjung->nama }}</td>
                    <td>{{ $pengunjung->instansi }}</td>
                    <td>{{ $pengunjung->data }} {{ $pengunjung->tahun_data }}</td>
                    <td>{{ $pengunjung->puas }}</td>
                    <td>{{ $pengunjung->saran }}</td>
                    <td>
                      <div class="row center">
                        <div class="box-button col-md-6 col-sm-6">
                          <center><a href="<?php echo url("pst/edit/".$pengunjung->id) ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></center>
                        </div>
                        <div class="box-button col-md-6 col-sm-6">
                          <center>
                            {!! Form::open(['method' => 'DELETE', 'action' => ['PstController@delete', $pengunjung->id]]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs', 'id' => 'confirm']) !!}
                            {!! Form::close() !!}
                          </center>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach ?>
                @else
                    <p> Tidak ada data pengunjung</p>
                @endif
                </tbody>
              </table>

              <div>
                <a href="<?php echo 'home' ?>" class="btn btn-info"><i class="fa fa-plus"></i> Kembali </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    $('#confirm').click(function(){
      confirm('Apakah Anda Yakin Untuk Menghapus data ini?');
    });
  });
</script>

@stop