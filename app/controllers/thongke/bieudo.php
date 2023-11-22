<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<div class="row w-100" style="height: 595px;">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Biểu đồ</h3>
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 200px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 500px;">
    <div id="piechart"></div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages': ['corechart']
      });
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        // Set Data
        var data = google.visualization.arrayToDataTable([
          ['Danh mục', 'Số lượng sản phẩm'],
          <?php
          $tongdm = count($listthongke);
          $i = 1;
          foreach ($listthongke as $thongke) {
            extract($thongke);
            if ($i == $tongdm) $dauphay = "";
            else $dauphay = ",";
            echo "['" . $thongke['tendm'] . "'," . $thongke['countsp'] . "]" . $dauphay;
            $i = $i + 1;
          }
          ?>
        ]);
        // Set Options
        var options = {
          'title': 'Biểu đồ thống kê sản phẩm theo danh mục',
          'width': 800,
          'height': 600
        };
        // Draw
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
  </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    
  </div>
  <!-- /.row -->
</nav>