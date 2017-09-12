@extends('master')

@section('main')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#foto').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); 
        }
    }

    function readURL1(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#foto1').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); 
        }
    }

    function readURL2(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#foto2').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); 
        }
    }

    function readURL3(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#foto3').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); 
        }
    }

    $(document).ready(function () {
        $("#imgInp").change(function () {

            readURL(this);
        });

        $("#imgInp1").change(function () {

            readURL1(this);
        });

        $("#imgInp2").change(function () {

            readURL2(this);
        });

        $("#imgInp3").change(function () {

            readURL3(this);
        });
    });

</script>


<div class="right_col" role="main" style="min-height: 300px;">

    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="x_panel tile ">
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
                    <div class="col-md-12 col-sm-12 col-xs-12 bg-white">
                        
                      <?php echo  Form::open(array( 'enctype' => "multipart/form-data", 'runat' => "server", "id" => 'form_saya', 'novalidate', 'class' => 'form-horizontal form-label-left' )) ?>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Background Color</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="back-color" type="color" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Judul</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea id="title" class="resizable_textarea form-control" ></textarea>
                          <input id="judul-color" type="color" class="form-control">
                        </div>
                      </div>

                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="imgInp">Icon
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <input id="imgInp" class="form-control col-md-7 col-xs-12" name="imgInp" type="file"">
                            <textarea id="desc1" class="resizable_textarea form-control" ></textarea>
                            <input id="imgInp1" class="form-control col-md-7 col-xs-12" name="imgInp" type="file"">
                            <textarea id="desc2" class="resizable_textarea form-control" ></textarea>
                            <input id="imgInp2" class="form-control col-md-7 col-xs-12" name="imgInp" type="file"">
                            <textarea id="desc3" class="resizable_textarea form-control" ></textarea>
                            <input id="imgInp3" class="form-control col-md-7 col-xs-12" name="imgInp" type="file"">
                            <textarea id="desc4" class="resizable_textarea form-control" ></textarea>
                            Background
                            <input id="col1" type="color" class="form-control">
                            Font
                            <input id="col2" type="color" class="form-control">
                          </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea id="deskripsi" class="resizable_textarea form-control" ></textarea>
                          background desc<input id="back-desc" type="color" class="form-control">
                          Font Color desc<input id="desc-color" type="color" class="form-control">
                        </div>
                      </div>

                      
                      
                      <?php echo Form::close() ?>

                      
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    
                    <button type="button" id="button" class="btn btn-success">Create</button>
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
                    <div>
                    
                    </div>
                    <div class="col-md-12" id="content" style="">
                      <div class="x_panel" id="back" style="background-color: #EDEDED;">
                        <div class="x_title" id="title" style="font-size: 27px;">
                          <center><b>
                          <a id="jdl_info">Judul Infografis</a>
                          <b><center>
                        </div>

                        <div class="col-md-8 col-md-offset-4" style="margin-top: 30px;">
                          <div class="color1 x_panel" style="background-color: rgb(128,128,128); border-radius: 10px;">
                            <div class="col-md-3" style="background-color: white; border-radius: 50%; " >
                              <img id="foto" alt="icon 1" class="img-responsive img-circle" alt="" width="70px;">
                            </div>
                            <div class="col-md-9 ">
                              
                                <center>
                                  <a class="color2" id="desk1" style="color: white; vertical-align: -webkit-baseline-middle;">BPS Merauke yang ada di kabupaten merauke
                                  is Awesome </a>
                                </center>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-8">
                          <div class="color1 x_panel" style="background-color: rgb(128,128,128); border-radius: 10px;">
                            <div class="col-md-3" style="background-color: white; border-radius: 50%; " >
                              <img id="foto1" alt="icon 2" class="img-responsive img-circle" alt="" width="70px;">
                            </div>
                            <div class="col-md-9 ">
                              
                                <center>
                                  <a class="color2" id="desk2" style="color: white; vertical-align: -webkit-baseline-middle;">BPS Merauke yang ada di kabupaten merauke
                                  is Awesome </a>
                                </center>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-8 col-md-offset-4">
                          <div class="color1 x_panel" style="background-color: rgb(128,128,128); border-radius: 10px;">
                            <div class="col-md-3" style="background-color: white; border-radius: 50%; " >
                              <img id="foto2" alt="icon 3" class="img-responsive img-circle" alt="" width="70px;">
                            </div>
                            <div class="col-md-9 ">
                              
                                <center>
                                  <a class="color2" id="desk3" style="color: white; vertical-align: -webkit-baseline-middle;">BPS Merauke yang ada di kabupaten merauke
                                  is Awesome </a>
                                </center>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-8">
                          <div class="color1 x_panel" style="background-color: rgb(128,128,128); border-radius: 10px;">
                            <div class="col-md-3" style="background-color: white; border-radius: 50%; " >
                              <img id="foto3" alt="icon 4" class="img-responsive img-circle" alt="" width="70px;">
                            </div>
                            <div class="col-md-9 ">
                              
                                <center>
                                  <a class="color2" id="desk4" style="color: white; vertical-align: -webkit-baseline-middle;">BPS Merauke yang ada di kabupaten merauke
                                  is Awesome </a>
                                </center>
                            </div>
                          </div>
                        </div>

                        <div class="deskripsi">
                          <div class="x_panel" id="back-deskripsi">
                            <div class="x_content" style="text-align: center;">
                              <a id="desc">Deskripsi dari grafik </a>
                            </div>
                          </div>
                        </div>

                      </div>
                      <div class="footer x_panel" style="margin-top: -10px;">
                        <div class="col-md-12">

                          <div class="col-md-3">
                            <img src="<?php echo asset('storage/images/icon/bps.png') ?>" alt="" width="34px;">
                            BPS Merauke
                          </div>
                          <div class="col-md-3">
                            <img src="<?php echo asset('storage/images/icon/fb.png') ?>" alt="" width="25px;">
                            BPS Merauke
                          </div>
                          <div class="col-md-3">
                            <img src="<?php echo asset('storage/images/icon/instagram.png') ?>" alt="" width="28px;">
                            BPS Merauke
                          </div>
                          <div class="col-md-3">
                          <img src="<?php echo asset('storage/images/icon/web.png') ?>" alt="" width="30px;">
                            meraukekab
                          </div>

                        </div>
                      </div>
                    </div>

                    <h3>Hasil Infografis:</h3>
                    <a style="color: red">Hasil infografis bisa diunduh dengan cara klik kanan lalu simpan gambar</a>
                    <div id="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<script type="text/javascript">
    function renderContent() {
        html2canvas(document.getElementById("content"), {
            letterRendering : true
        }).then(function(canvas) {
            document.getElementById("result").appendChild(canvas);
        });
    }

    document.getElementById("button").onclick = renderContent;
</script>
<script src="<?php echo asset('public/js/autosize.min.js') ?>"></script>


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

    $("#desc1").keyup(function(){
      $("#desk1").html($("#desc1").val());
    });

    $("#desc2").keyup(function(){
      $("#desk2").html($("#desc2").val());
    });

    $("#desc3").keyup(function(){
      $("#desk3").html($("#desc3").val());
    });

    $("#desc4").keyup(function(){
      $("#desk4").html($("#desc4").val());
    });

    $("#col1").change(function(){
      $(".color1").css('background-color',$("#col1").val());
    });
    
    $("#col2").change(function(){
      $(".color2").css('color',$("#col2").val());
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