@extends('master')

@section('main')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo asset('public/js/Chart.min.js') ?>"></script>
<div class="right_col" role="main" id="content">
<button type="button" id="button" class="btn btn-success loading">Create</button>
<div id="ben ono">
<div id="content">
<div class="row" >
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="dashboard_graph">

        <div class="row x_title">
          <div class="col-md-6">
            <h3>Jumlah Pengunjung <small>
	        Setiap Bulan</small></h3>
          </div>
        </div>

        <div class="col-md-8 col-sm-8 col-xs-12">
          <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
          <div style="width: 100%;">
            <canvas id="mybarChart" style="width: 100%; height:270px;"></canvas>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 bg-white">
          <div class="x_title">
            <h2>Tingkat Kepuasan Pengguna</h2>
            <div class="clearfix"></div>
          </div>

          <div class="col-md-12 col-sm-12 col-xs-6">
            <?php foreach ($kepuasan as $kepuasan) : ?>
	            <div>
	              <p>{{$kepuasan->puas}} <strong style="color: blue" class="right_col">{{ $kepuasan->presentase }}%</strong></p>
	              <div class="progress">
	                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ $kepuasan->presentase }}%;">
	                  <span class="sr-only">60% Complete</span>
	                </div>
	              </div>
	            </div>
            <?php endforeach ?>
          </div>

        </div>

        <div class="clearfix"></div>
      </div>
    </div>

</div>
</br>

<div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="x_panel tile fixed_height_320">
        <div class="x_title">
          <h2>Pekerjaan Utama</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          
        <?php foreach ($pekerjaan as $pekerjaan) : ?>
	        <div>
	          <p>{{$pekerjaan->kerja}} <strong style="color: blue" class="right_col">{{ $pekerjaan->presentase }}%</strong></p>
	          <div class="progress">
	            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ $pekerjaan->presentase }}%;">
	              <span class="sr-only">60% Complete</span>
	            </div>
	          </div>
	        </div>
	    <?php endforeach ?>

        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="x_panel tile fixed_height_320 overflow_hidden">
        <div class="x_title">
          <h2>Pendidikan</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <table class="" style="width:100%">
            <tr>
              <th style="width:37%;">
                <p>Grafik Pendidikan</p>
              </th>
              <th>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <p class="">Keterangan</p>
                </div>
                
              </th>
            </tr>
            <tr>
              <td>
                <canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
              </td>
              <td>
                <table class="tile_info">
                  <tr>
                    <td>
                      <p><i class="fa fa-square black"></i>SD/MI </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square blue"></i>SMP/MTs </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square green"></i>SMA/SMK/MA </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square red"></i>DI/DII/DII </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square purple"></i>DIV/SI </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square aero"></i>SII/SIII </p>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>


    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="x_panel tile fixed_height_320">
        <div class="x_title">
          <h2>Tujuan Penggunaan Data</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <table class="" style="width:100%">
            <tr>
              <th style="width:37%;">
                <p>Tujuan Penggunaan Data</p>
              </th>
              <th>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <p class="">Keterangan</p>
                </div>
              </th>
            </tr>
            <tr>
              <td>
                <canvas id="canvas2" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
              </td>
              <td>
                <table class="tile_info">
                  <tr>
                    <td>
                      <p><i class="fa fa-square green"></i>Penelitian </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square red"></i>Perencanaan </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square purple"></i>Evaluasi </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square aero"></i>Penyebaran Informasi </p>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
<div id="result"></div>
</div>




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
<!-- Doughnut Chart -->
    <script>
      $(document).ready(function(){
        var options = {
          legend: false,
          responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              <?php foreach( $pendidikan as $pendidikan ): ?>
              	'{{$pendidikan->sekolah}}',
              <?php endforeach ?>
              
            ],
            datasets: [{
              data: [
              <?php foreach( $pendidikan1 as $sekolah ): ?>
              	'{{$sekolah->presentase}}',
              <?php endforeach ?>
              ],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB",
                "#000000"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA",
                "#090909"
              ]
            }]
          },
          options: options
        });
      });

      $(document).ready(function(){
        var options = {
          legend: false,
          responsive: false
        };

        new Chart(document.getElementById("canvas2"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              <?php foreach( $tujuan_data as $tujuan ): ?>
              	'{{$tujuan->tujuan_penggunaan_data}}',
              <?php endforeach ?>
            ],
            datasets: [{
              data: [
              <?php foreach( $tujuan_data1 as $tujuan ): ?>
              	'{{$tujuan->presentase}}',
              <?php endforeach ?>
              ],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB"
              ]
            }]
          },
          options: options
        });
      });
    </script>
    <!-- /Doughnut Chart -->

    <!-- Bar Chart -->
    <script>
      Chart.defaults.global.legend = {
        enabled: false
      };

      // Bar chart
      var ctx = document.getElementById("mybarChart");
      var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: [
          	<?php foreach ($jml_pengunjung as $pengunjung) : ?>
	          '{{ $pengunjung->bulan }}',
	        <?php endforeach ?>
          ],
          datasets: [{
            label: '# of Votes',
            backgroundColor: "#26B99A",
            data: [
            	<?php foreach ($jml_pengunjung as $pengunjung) : ?>
		          '{{ $pengunjung->jml_pengunjung }}',
		        <?php endforeach ?>
            ]
          }]
        },

        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });

    </script>
    <!-- Bar Chart -->
@stop