<?php
    require("db.inc");

    $sql = "SELECT * FROM pie";
    mysqli_set_charset($link, 'utf8');
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
    
          ['Flower', 'Water Needed (ml)']
          <?php
          if( $result = mysqli_query($link, $sql) ) {
            while( $row = mysqli_fetch_assoc($result) ){
                echo ",['".$row["name"]."', ".$row["data"]."]";
            }
        }
          ?>
        //   ['Rose',     60],
        //   ['Violet',      130],
        ]);

        var options = {
          title: 'My Garden'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
