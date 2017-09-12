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

    $(document).ready(function () {
        $("#imgInp").change(function () {

            readURL(this);
        });
    });

</script>

<script>
    $(document).ready(function () {

        $("#form_saya").submit(function (submitEvent) {
            var keputusan = "kirim";

            // get the file name, possibly with path (depends on browser)
            var filename = $('#imgInp').val();

            if (filename != "") {
                // Use a regular expression to trim everything before final dot
                var extension = filename.replace(/^.*\./, '');

                // Iff there is no dot anywhere in filename, we would have extension == filename,
                // so we account for this possibility now
                if (extension == filename) {
                    extension = '';
                } else {
                    // if there is an extension, we convert to lower case
                    // (N.B. this conversion will not effect the value of the extension
                    // on the file upload.)
                    extension = extension.toLowerCase();
                }

                switch (extension) {
                    case 'jpg':
                    case 'jpeg':
                    case 'png':
                    case 'gif':


                        // uncomment the next line to allow the form to submitted in this case:
                        break;

                    default:
                        alert("Pastikan format file adalah [jpg, jpeg, png, gif]");
                        // Cancel the form submission
                        keputusan = "abort";

                }
            }

            if (keputusan == "abort") {
                submitEvent.preventDefault();
            }


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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Font Color</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="judul-color" type="color" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Judul</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea id="title" class="resizable_textarea form-control" ></textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="imgInp">Choose
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="imgInp" class="form-control col-md-7 col-xs-12" name="imgInp" type="file"">
                          </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea id="deskripsi" class="resizable_textarea form-control" ></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Back Desc</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="back-desc" type="color" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Font Color</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="desc-color" type="color" class="form-control">
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

                        <div class="img" id="img">
                         <center><img id="foto" src="" alt="Gambar Grafik" style="width: 500px; margin-bottom: 30px;"/><center>
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
                    <a href="" style="color: red">Hasil infografis bisa diunduh dengan cara klik kanan lalu simpan gambar</a>
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