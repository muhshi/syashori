@extends('master')

@section('main')
<style type="text/css">
.card{
  position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
    padding: 10px;
}
.card-img-top {
    border-top-right-radius: calc(.25rem - 1px);
    border-top-left-radius: calc(.25rem - 1px);
}
.card-block {
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}
.card-title {
    margin-bottom: .75rem;
}
</style>

<div class="right_col" role="main" style="min-height: 300px;">
	<div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                    <h2>App Versions</h2>
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
                    <div class="col-md-4 col-sm-6 col-xs-12">
	                    <div class="card">
						  <img class="card-img-top img-responsive " src="<?php echo asset('public/img/template1.jpg') ?>" height="100px;" alt="">
						  <div class="card-block">
						    <h4 class="card-title">Template 1</h4>
						    <p class="card-text">Template infografis ini hanya bisa diisi 1 gambar/grafik dan deskripsi dari gambar/grafik tersebut. Tersedia juga fitur untuk mengubah background-color dan font-color.</p>
						    <a href="{{ url('info1') }}" class="btn btn-primary">Coba Template</a>
						  </div>
						</div>   
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
	                    <div class="card">
						  <img class="card-img-top img-responsive" src="<?php echo asset('public/img/template2.png') ?>" height="100px;" alt="">
						  <div class="card-block">
						    <h4 class="card-title">Template 2</h4>
						    <p class="card-text">Template infografis yang ini berisi 4 elemen yang bisa diisi icon yang menggambarkan sesuatu dan berisi deskripsi tentang setiap icon yang kita upload. Tersedia juga fitur untuk mengubah background-color dan font-color.</p>
						    <a href="{{ url('/4elemen') }}" class="btn btn-primary">Coba template</a>
						  </div>
						</div>   
					</div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                          <img class="card-img-top img-responsive" src="<?php echo asset('public/img/template3.png') ?>" height="100px;" alt="">
                          <div class="card-block">
                            <h4 class="card-title">Template 3</h4>
                            <p class="card-text">Template infografis yang ini bisa digunakan untuk mengisi publikasi kegiatan bps untuk sosial media instagram dan facebook. tidak hanya untuk sosial media bps, tapi juga anggota bps lainnya</p>
                            <a href="{{ url('/insta') }}" class="btn btn-primary">Coba template</a>
                          </div>
                        </div>   
                    </div>
                </div>

            </div>
        </div>
	</div>
</div>

@stop